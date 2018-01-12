# -*- coding: utf-8 -*-

import urllib.request as request
import types
import chardet
from bs4 import BeautifulSoup

def getHTML(url):
    headers = {'User-Agent':'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36'}
    req = request.Request(url, headers=headers)
    return request.urlopen(req).read()

def getContent(content):
    startstr = '<span>'
    endstr = '</span>'
    startIndex = content.index(startstr)
    if startIndex >= 0:
        startIndex += len(startstr)
    endIndex = content.index(endstr)
    return content[startIndex:endIndex]

output = open("result.txt", "w+", encoding="utf-8")

for i in range(1,14):
    url = "https://www.qiushibaike.com/text/page/"+str(i)+"/"
    
    soup = BeautifulSoup(getHTML(url), "lxml")

    p_array = soup.find_all("div", {"class":"content"})
    
    for x in p_array:
        content = x.find("span")
        content = content.get_text()
        #print(type(content))
        
        if not content:
           continue
        output.write(content)
        
output.close()
