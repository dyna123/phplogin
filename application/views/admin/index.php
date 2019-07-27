<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">image</th>
                <th scope="col">Role</th>
                <th scope="col">is_active</th>
                <th scope="col">date_created</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($role as $u) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $u['name']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['image']; ?></td>
                    <td><?= $u['role']; ?></td>
                    <td><?= $u['is_active']; ?></td>
                    <td><?= $u['date_created']; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<!-- End of Main Content -->