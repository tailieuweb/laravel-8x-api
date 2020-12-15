<html>
    <body>
        <h1>Hello World</h1>
        
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td>Edit - Delete - View</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       {!! $users->links() !!}
        
    </body>
</html>