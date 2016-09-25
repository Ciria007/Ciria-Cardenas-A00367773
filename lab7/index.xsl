<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
    <head>
      <title>Lab 8</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#E6E6FA;">
      <div class="page-header">
        <h1  style="font-weight:bold; text-align:center;">My Family</h1>
      </div>

      <div id="cont" class="container-fluid">
        <div class="row">
          <table border="1" align="center" bordercolor="green" style="text-align:left;">
            <tr bgcolor="lightblue">
              <th>Name</th>
              <th>Birthday</th>
              <th>Parentesco</th>
              <th>Number of siblings</th>
              <th>Photo</th>
            </tr>
            <xsl:for-each select="family/member">
            <tr  style="padding:55px;">
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="birthday"/></td>
              <td><xsl:value-of select="parentesco"/></td>
              <td style="text-align:center;"><xsl:value-of select="numSiblings"/></td>
              <td>
                <xsl:element name="img">
                <xsl:attribute name="src">
                  <xsl:value-of select="image"/>
                </xsl:attribute>
                <xsl:attribute name="align">left</xsl:attribute>
                <xsl:attribute name="width">200</xsl:attribute>
                <xsl:attribute name="height">200</xsl:attribute>

                </xsl:element>
              </td>
            </tr>
            </xsl:for-each>
          </table>
        </div>
    </div>

    <br></br>
    <div  class="container-fluid">
      <h1>Questions</h1>
      <p>What are the goals of the XML technology?</p>
        <pre style="background-color:#E6E6FA;">        •XML was designed to carry data - with focus on what data is
        •XML tags are not predefined like HTML tags are
        •Simplifies:
          Data sharing
          Data transport
          Platform changes
          Data availability</pre>
      <p>Under what circumstances are better the nested attributes than the tag attributes</p>
          <pre style="background-color:#E6E6FA;">        When we want to personalize something in order to give a meaning to what we are using.
        This would help to create "objects" so we can create multiple and keep the meaning</pre>
      <p>Under what circumstances are better the tags than nested attributes</p>
          <pre style="background-color:#E6E6FA;">        When we want to use general purpose description/scheleton of the content of an HTML</pre>

      <p>What is your opinion about storing data in XML documents?</p>
          <pre style="background-color:#E6E6FA;">       I liked using XML because it gave cmpletely meaning to what I was creating. It might not be the ideal tool to use when having a huge amount of data but still
       is human readable and easy to create.</pre>
      <p>What are the advantages to use XML Schemas over DTDs?</p>
          <pre style="background-color:#E6E6FA;">       It provide an Object Oriented approach to defining the format of an XML document. XML Schemas provide a set of basic types. These types are much wider ranging than the
      basic PCDATA and CDATA of DTDs. They include most basic programming types such as integer, byte, string and floating point numbers, but they also expand into Internet
      data types such as ISO country and language codes. </pre>

    </div>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
