function findgame(title){
  let obj = {"game_title":title};
  let txt="";
  jsonObj = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
     gameObj = JSON.parse(this.responseText);
     
     //alert(gameObj);
      i=gameObj.length;

      
        var overlay = document.getElementById("overlay");
        var spinner = document.getElementById("spinner");
        function showSpinner() {
            spinner.className = "show";
            overlay.className = "show";
            setTimeout(() => {
                spinner.className = spinner.className.replace("show", "");
                overlay.className = overlay.className.replace("show", "");
            }, 5000);
        }
        showSpinner();


      if(gameObj=="empty"){
          document.getElementById("searchresults1").innerHTML = "No games found";
          document.getElementById("searchresults").innerHTML = "";
      }
      else{ 
        document.getElementById("searchresults").style.display="block";
        for(j=0;j<i;j++){ 
          txt += "<a href='gamedetails.php?gameid="+ gameObj[j].game_id + "&game_title="+ gameObj[j].game_title +"&game_desc="+ gameObj[j].game_desc +"&genre_name="+ gameObj[j].genre_name +"&developer_name="+ gameObj[j].developer_name +"&publisher_name="+ gameObj[j].publisher_name +"&image="+ gameObj[j].image +"'><img src='"+ gameObj[j].image+"'></a>";
          console.log(txt);
          document.getElementById("searchresults").innerHTML = txt;
          document.getElementById("searchresults1").innerHTML = "";
        }
      }
    } 
  }
  
  xmlhttp.open("POST", "../../../BGamesProvider/controller/searchgame.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + jsonObj);
}

function addCollection(price, condition, user, game) {
  let intPrice = parseInt(price);
  let intuser = parseInt(user);
  let intgame = parseInt(game);
  console.log("Game ID:",game);
  console.log("Price paid:",price);
  console.log("User ID:",user);
  let obj = {"price": intPrice, "condition": condition, "userid": intuser, "gameid": intgame}
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "../../../BGamesProvider/controller/addcollection.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + dbParam);
  window.location.href = "collection.php"
}

function addWishlist(user, game) {
  let intuser = parseInt(user);
  let intgame = parseInt(game);
  let obj = {"userid": intuser, "gameid": intgame}
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "../../../BGamesProvider/controller/addwishlist.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + dbParam);
  window.location.href = "wishlist.php"
}

function removeCollection(user, game) {
  let intuser = parseInt(user);
  let intgame = parseInt(game);
  let obj = {"userid": intuser, "gameid": intgame}
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "../../../BGamesProvider/controller/removecollection.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + dbParam);
  window.location.href = "collection.php"
}

function removeWishlist(user, game) {
  let intuser = parseInt(user);
  let intgame = parseInt(game);
  let obj = {"userid": intuser, "gameid": intgame}
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "../../../BGamesProvider/controller/removewishlist.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + dbParam);
  window.location.href = "wishlist.php"
}

function userCollection(user){
  let intuser = parseInt(user);
  let obj = {"userid": intuser};
  let txt="";
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      gameObj = JSON.parse(this.responseText);
      console.log(gameObj);
      i=gameObj.length;

      if(gameObj=="empty"){
        document.getElementById("usercollection1").innerHTML = "<p>Search for gmes to start adding to your collection.</p>";
        document.getElementById("usercollection").innerHTML = "";
        loadTheme();
        loadFont();
      }
      else{ 
        document.getElementById("usercollection").style.display="block";
        for(j=0;j<i;j++){ 
          txt += "<a href='collectiongamedetails.php?gameid="+gameObj[j].game_id+ "&game_title="+ gameObj[j].game_title +"&game_desc="+ gameObj[j].game_desc +"&genre_name="+ gameObj[j].genre_name +"&developer_name="+ gameObj[j].developer_name +"&publisher_name="+ gameObj[j].publisher_name + "&price_paid="+ gameObj[j].price_paid +"&item_condition="+ gameObj[j].item_condition +"&image="+ gameObj[j].image +"'><img src='"+ gameObj[j].image+"'></a>";
          console.log(txt);
          document.getElementById("usercollection").innerHTML = txt;
          document.getElementById("usercollection1").innerHTML = "";
        }
      }
    }
  }
  xmlhttp.open("POST", "../../../BGamesProvider/controller/usercollection.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + dbParam);
}

function userWishlist(user){
  let intuser = parseInt(user);
  let obj = {"userid": intuser};
  let txt="";
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      gameObj = JSON.parse(this.responseText);
      console.log(gameObj);
      i=gameObj.length;

      if(gameObj=="empty"){
        document.getElementById("userwishlist1").innerHTML = "<p>Search for gmes to start adding to your wishlist.</p>";
        document.getElementById("userwishlist").innerHTML = "";
        loadTheme();
        loadFont();
        }
      else{ 
        document.getElementById("userwishlist").style.display="block";
        for(j=0;j<i;j++){ 
          txt += "<a href='wishlistgamedetails.php?gameid="+ gameObj[j].game_id+ "&game_title="+ gameObj[j].game_title +"&game_desc="+ gameObj[j].game_desc +"&genre_name="+ gameObj[j].genre_name +"&developer_name="+ gameObj[j].developer_name +"&publisher_name="+ gameObj[j].publisher_name+ "&image="+ gameObj[j].image +"'><img src='"+ gameObj[j].image+"'></a>";
          console.log(txt);
          document.getElementById("userwishlist").innerHTML = txt;
          document.getElementById("userwishlist1").innerHTML = "";
        }
      }
    }
  }
  xmlhttp.open("POST", "../../../BGamesProvider/controller/userwishlist.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("parameters=" + dbParam);
}