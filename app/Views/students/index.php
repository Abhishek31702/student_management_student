<h1>Students List</h1>
<a href="/students/create">Add New Student</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= $student['id']; ?></td>
        <td><?= $student['name']; ?></td>
        <td><?= $student['email']; ?></td>
        <td><?= $student['phone']; ?></td>
        <td>
            <a href="/students/edit/<?= $student['id']; ?>">Edit</a> | 
            <a href="/students/delete/<?= $student['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
