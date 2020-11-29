<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body>
<xsl:for-each select="faq_page/faq">
  <div style="background-color:#FF0000;color:white;padding:4px">
    <span style="font-weight:bold"><xsl:value-of select="quest"/></span>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt;overflow:hidden">
    <p style="overflow:hidden">
    <xsl:value-of select="ans"/>
    </p>
  </div>
</xsl:for-each>
</body>
</html>