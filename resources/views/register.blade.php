<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="/index">Click here to go back</a><br/><br/>
        <form action="/register" method="post">
            @csrf 
            Enter Username: <input type="text" name="username" required="required" /> <span id="uname"></span><br/>
            Enter password: <input type="password" name="password" required="required" /><span id="pass"></span> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>
