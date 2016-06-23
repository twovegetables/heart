#!/usr/bin
#-*-coding:utf-8-*-
import urllib
import urllib2
import re
try:
	request=urllib2.Request('http://www.people.com.cn/GB/14739/14745/21522/2907407.html')
	response=urllib2.urlopen(request)
except urllib2.URLError,e:
	print e.reason
l=[]
pattern=re.compile(r'<td.*?>(.*?)</td>')
file=open('food.txt','w+')
for m in re.finditer(pattern,response.read()):
    file.write(m.group(1)+' ')
