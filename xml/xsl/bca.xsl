<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
    <style>
    body{padding:3px 200px;display:flex;
        justify-content: center;}
    h3,h4{margin:3px 12px;}
    </style>
    <body>
    <div>
    
    <table width="100%">
    <tr>
        <td><h3><xsl:value-of select="bca/batch"/></h3></td>
        <td align="right"><h4><xsl:value-of select="bca/full-marks"/></h4></td>
    </tr>
    <tr>
        <td><h3><xsl:value-of select="bca/result"/></h3></td>
        <td align="right"><h4><xsl:value-of select="bca/Pass-marks"/></h4></td>
    </tr>
    </table>

    <xsl:for-each select="bca/student">
    <table border="1px" style="margin-top: 10px;">
    
    <tr>
        <th colspan="5" align="center"><xsl:value-of select="thead/name"/></th>
    </tr>
    
    <tr style="background-color: rgba(51, 152, 54, 0.771)">
        <th><xsl:value-of select="caption/subject"/></th>
        <th><xsl:value-of select="caption/obj-marks"/></th>
        <th><xsl:value-of select="caption/sub-marks"/></th>
        <th><xsl:value-of select="caption/total"/></th>
        <th><xsl:value-of select="caption/remark"/></th>
    </tr>
    <xsl:for-each select="tbody/row">
    <tr>
        <td><xsl:value-of select="subject"/></td>
        <td><xsl:value-of select="obj-marks"/></td>
        <td><xsl:value-of select="sub-marks"/></td>
        <td><xsl:value-of select="total"/></td>
        <xsl:choose>
            <xsl:when test="total>30">
                <td style="color: green;"><xsl:value-of select="remark"/></td>
            </xsl:when>
            <xsl:otherwise>
                <td style="color: red;"><xsl:value-of select="remark"/></td>
            </xsl:otherwise>
        </xsl:choose>
    </tr>  
    </xsl:for-each>
    <tr>
        <td colspan="5" align="center"><xsl:value-of select="tfoot/foot"/></td>
    </tr>

    </table>
    </xsl:for-each>
    </div>
    </body>
    </html>

</xsl:template>
</xsl:stylesheet>