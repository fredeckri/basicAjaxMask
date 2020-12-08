<!--#include file="aspJson.asp"-->
<%
Response.AddHeader "Content-Type", "text/html;charset=UTF-8"
Response.CodePage = 65001
Response.CharSet = "UTF-8"
%>
    <%
    Set db_conn = Server.CreateObject("ADODB.Connection")
    str_conn = "Provider=SQLOLEDB;Server=FREDERICKPC\SQLSVR;User ID=fred;Password=0302;Database=escolati;"
    db_conn.connectionstring = str_conn
    db_conn.Open
    Set rs = Server.CreateObject("ADODB.Recordset")
    %>
    <%
    aluno=Request.Querystring("nome")
    
    'aluno="Gabr"
    'response.write(aluno)
    'Response.Write "{""myName"":""" & Request.Form("nome") & """}"
    'response.end
    'aluno="Gabr" ' where aluno like '%"+aluno+"%''
    %>
    <%rs.open "SELECT [aluno],[Curso],[Valor] FROM [dbo].[Aluno_curso_valor] where aluno like '%"+aluno+"%'", db_conn        
        %>
 <%
                    dim curso,data
                
                    data=""
                    
                     do until rs.eof     
                             data=data&"{"
                            for each x in rs.fields
                            data=data&"|"&x.name&"|:|"&x.value&"|,"
                            Next
                            data = data & "}"
                     rs.MoveNext
                     Loop
                       'Loop
                data=Replace(data,"|","""") 
                data=Replace(data,",}","}")    
                data=Replace(data,"}{","},{")
                data="{""dados"":["&data&"]}" 
                response.write(data)
                
                       'do until rs.eof     
                       'data=data&"{"
                       'data=data&"""nome"":"""&rs.Fields("Aluno")&""","
                       'data=data&"""curso"":"""&rs.Fields("Curso")&""","
                       'data=data&"""valor"":"""&rs.Fields("Valor")&""""
                       'data = data & "}"
                       'rs.MoveNext
                       'Loop
        
%>                 
         
           
            

        