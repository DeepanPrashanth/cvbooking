<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>Payment Details</h2>
    <table border="2">
      <tr bgcolor="#c3cd32">
        <th>Vehicle ID</th>
        <th>Amount</th>
        <th>Mode of Payment</th>
        <th>Status</th>

      </tr>
      <xsl:for-each select="commercialvehicle/vehicles">
      <xsl:sort select="vehicle_id"/>
      <tr>
        <td><xsl:value-of select="vehicle_id"/></td>
        <td><xsl:value-of select="amount"/></td>
        <td><xsl:value-of select="modeofpayment"/></td>
        <td><xsl:value-of select="status"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

