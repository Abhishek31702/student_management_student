<h1>Edit Student</h1>
<form method="post" action="/students/update/<?= $student['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $student['name']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $student['email']; ?>" required>
    <br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?= $student['phone']; ?>" required>
    <br>
    <button type="submit">Update Student</button>
</form>
