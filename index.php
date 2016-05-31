<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <link href="styles.css" rel="stylesheet"/>
  </head>
  <body>
    <div id="pageContainer">
    <div id="profile">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.
    </div>
    <div id="postContainer">
        <div id="posting">
        <form>
        <textarea cols="60" rows="2"></textarea>
        <input type="submit" name="post" value="Post" />
        </form>
        </div>
        <div id="postedContent">
        <?php
        for($i=0;$i<10;$i++){
        ?>
        <div class="post">
            <div class="avatar"></div>
            <div class="postContent">
                <h3>Handle</h3>
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla finibus justo, et varius purus tincidunt sed. Vestibulum sed condimentum mauris.</p>
            </div>
            <div class="clear"></div>
        </div>
        
        <?php
        }
        ?>
        
        </div>
        <div class="clear"></div>
    </div>
    </div>
  </body>
</html>
