<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Add</title>
</head>
<body>

<main class="form-signin w-50 m-auto">
  <form action="admin/add-submit.php">
    <h1 class="h3 mb-3 fw-normal" style="margin-top: 10px;">Please Add Food Items</h1>

    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInput" placeholder="1-100">
      <label for="floatingInput">Product ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="example">
      <label for="floatingInput">Product Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="1232">
      <label for="floatingInput">product Price</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInput" placeholder="1232">
      <label for="floatingInput">product Quantity</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="1232">
      <label for="floatingInput">product Description</label>
    </div>
    <div class="form-floating">
      <input type="file" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Image</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" style="margin-top: 8px;" type="submit">Submit</button>
    <p class="mt-5 mb-3 text-muted">Note! Form is not submitting any data!</p>
  </form>
</main>

</body>
</html>