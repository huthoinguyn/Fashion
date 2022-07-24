<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      form {
        max-width: 640px;
        margin: 0 auto;
        padding: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 8px;
      }
      form input {
        width: 100%;
        outline: none;
        padding: 4px;
        border-radius: 4px;
        border: none;
      }
    </style>
  </head>
  <body>
    <form action="./treatment.php" method="POST">
      <input
        type="text"
        name="productimage"
        placeholder="Enter product image url"
      />
      <input type="text" name="productname" placeholder="Enter product name" />
      <input
        type="text"
        name="productprice"
        placeholder="Enter product price"
      />
      <input type="submit" value="Send" name="addproduct"/>
    </form>
  </body>
</html>
