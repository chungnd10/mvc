<h1>Create new category</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" required class="form-control" id="name" placeholder="Enter a name" name="category_name">
    </div>

    <div class="form-group">
        <label for="description">Content</label>
        <input type="text" required class="form-control" id="content" placeholder="Enter a content" name="content">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
