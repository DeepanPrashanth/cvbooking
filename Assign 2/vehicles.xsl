<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>Vehicles available</h2>
    <table border="2">
      <tr bgcolor="#c3cd32">
        <th>Name</th>
        <th>Fare</th>
        <th>GVW</th>
        <th>Payload</th>

      </tr>
      <xsl:for-each select="commercialvehicle/vehicles">
      <xsl:sort select="name"/>
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="fare"/></td>
        <td><xsl:value-of select="gvw"/></td>
        <td><xsl:value-of select="payload"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

