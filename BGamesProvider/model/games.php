<?php
    class games{
        public function searchgames($pdo,$title){
            $query="SELECT g.game_id,g.image, g.game_title, g.game_desc, d.developer_name, e.genre_name, p.publisher_name FROM `games` c INNER JOIN games g ON c.game_id = g.game_id INNER JOIN developers d ON g.developer_id = d.developer_id INNER JOIN genre e ON g.genre_id = e.genre_id INNER JOIN publishers p ON g.publisher_id = p.publisher_id WHERE g.game_title LIKE CONCAT('%', :title, '%')";
            $stmt=$pdo->prepare($query);
            
            $stmt->execute(array(':title'=>$title));
            $result=[];
            $result1=[];
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $result[]=$row;
            }
            if ($title==""){
                return($result1);
            }
            else{
                return($result);
            }
        }

        public function addCollection($pdo,$price, $condition, $user, $game) {
            $query="insert into collections (user_id, game_id, price_paid, item_condition) values(:user, :game, :price, :condition)";
            $stmt=$pdo->prepare($query);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':game', $game);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':condition', $condition);
            $stmt->execute();
        }

        public function addWishlist($pdo, $user, $game) {
            $query="insert into wishlists (user_id, game_id) values(:user, :game)";
            $stmt=$pdo->prepare($query);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':game', $game);
            $stmt->execute();
        }

        public function removeCollection($pdo, $user, $game){
            $query="DELETE FROM collections WHERE user_id=(:user) AND game_id=(:game)";
            $stmt=$pdo->prepare($query);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':game', $game);
            $stmt->execute();
        }

        public function removeWishlist($pdo, $user, $game){
            $query="DELETE FROM wishlists WHERE user_id=(:user) AND game_id=(:game)";
            $stmt=$pdo->prepare($query);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':game', $game);
            $stmt->execute();
        }

        public function userCollection($pdo,$user_id){
            
            $query="SELECT g.game_id, c.price_paid, c.item_condition, g.image, g.game_title, g.game_desc, d.developer_name, e.genre_name, p.publisher_name FROM `collections` c INNER JOIN games g ON c.game_id = g.game_id INNER JOIN developers d ON g.developer_id = d.developer_id INNER JOIN genre e ON g.genre_id = e.genre_id INNER JOIN publishers p ON g.publisher_id = p.publisher_id WHERE c.user_id=:user_id";
            $stmt=$pdo->prepare($query);
            
            $stmt->execute(array(':user_id'=>$user_id));
            $result=[];
            $result1=[];
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $result[]=$row;
            }
            if ($user_id==""){
                return($result1);
            }
            else{
                return($result);
            }
        }

        public function userWishlist($pdo,$user_id){
            
            $query="SELECT g.game_id, g.image, g.game_title, g.game_desc, d.developer_name, e.genre_name, p.publisher_name FROM `wishlists` c INNER JOIN games g ON c.game_id = g.game_id INNER JOIN developers d ON g.developer_id = d.developer_id INNER JOIN genre e ON g.genre_id = e.genre_id INNER JOIN publishers p ON g.publisher_id = p.publisher_id WHERE c.user_id=:user_id";
            $stmt=$pdo->prepare($query);
            
            $stmt->execute(array(':user_id'=>$user_id));
            $result=[];
            $result1=[];
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $result[]=$row;
            }
            if ($user_id==""){
                return($result1);
            }
            else{
                return($result);
            }
        }
    }
?>