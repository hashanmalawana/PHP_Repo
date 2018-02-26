<%
response.ContentType="text/xml"
response.Write("<?xml version='1.0' encoding='UTF-8'?>")
response.Write("<note>")
response.Write("<from>Jani</from>")
response.Write("<to>Tove</to>")
response.Write("<message>Remember me this weekend</message>")
response.Write("</note>")
%> 