# 10daysSeris

html
css
js  dom objects
php 
mysql

# htmlSeris
 Html
    html 5 is the latest version of html
    audio images and video supported
    animations

 # form controls 
  ``` html 
   <input type="text" placeholder="username" ><br>
    <input type="password" placeholder="password"><br>
    <input type="checkbox"><br>
    gender <br>
    male<input type="radio" name="gender"><br>
    female<input type="radio" name="gender"><br>
    <input type="file"><br>
    <button>login</button>
    
 ```
   # NavBar
   demonstration of navigation bar
   ```html
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #212121;
            color: white;
        }
        ul{
            background-color: black;
            border-radius: 8px;
            display: flex;
            margin: 0;

        }
        li{
            margin-left: 23px;
            list-style: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>
</body>
</html>
   ```
   # selectors
   demonstration of Selectors
 ``` html 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        <!-- External css--> <link rel="stylesheet" href="style.css">
            <style>
                body{
                    background-color:#212121;
                }
                /*you can select items using tagNames {you need to provide tagName then open Brases{specify your css code}}*/
                .navItems{
                    background-color: blueviolet;
                }
                /*you can select items using className {you need to provide dot-operator(.)ClassName then open Brases{specify your css code}}*/
            
                #home{
                    color: #fff;
                }
                /*you can select items using ID {you need to provide hash-opertor(#)Id then open Brases{specify your css code}}*/
            
        </style> <!-- Internal css-->
        </head>
        <body>
            <nav class="navItems">
                <ul>
                    <li id="home">Home</li>
                    <li>About</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </body>
        </html>
```
# basics 
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #212121;
            color:#fff; 
        }
        div{
            background-color:red;
            display: inline;
        }
        span{
            background-color: aqua;
        }
    </style>
</head>
<body>
    <div>hello this is an div tag</div> <!--Block Element-->
    <span>hello this is an span tag</span> <!--Inline Element-->
</body>
</html>
``` 
