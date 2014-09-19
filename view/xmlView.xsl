<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html"/>
<xsl:template match="/">
 <html>
  <head>
    <h1>TEST</h1>
  </head>
  <body>
   <table border="1">
    <tr bgcolor="#9acd32">
      <th>Countries</th>
      <th>Population</th>
    </tr>
    <xsl:for-each select="mondial/country">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="@population" /></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
</html>
</xsl:template>
</xsl:stylesheet>