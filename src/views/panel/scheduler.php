<main>
    <div class="container">
        <div class="container-actions">
            <h4 >Agendamentos</h4>
            <a href="create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Novo agendamento</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Data de agendamento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedulers as $key => $scheduler): ?>
                    <tr>
                        <th scope="row"><?= $scheduler['id'] ?></th>
                        <td><?= $scheduler['name_scheduler'] ?></td>
                        <td><?= $scheduler['date_scheduler'] ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Ações
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/panel/scheduler/edit/<?= $scheduler['id'] ?>"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Deletar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>    
                <?php endforeach;?>           
            </tbody>
        </table>
    </div>
</main>