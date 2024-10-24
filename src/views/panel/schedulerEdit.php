<main>
    <div class="container">
        <div class="container-actions">
            <h4>Editar agendamento</h4>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="panel/scheduler/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Agendamento</li>
            </ol>
        </nav>
        <form method="post">
            <div class="row mt-5">
                <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input value="<?= $scheduler['name_scheduler'] ?>" type="name" required name="name_scheduler" class="form-control"
                        placeholder="Nome da agenda">
                </div>
                <div class="form-group col-md-6">
                    <label>Data</label>
                    <input value="<?= $scheduler['date_scheduler'] ?>" type="date" required name="date_scheduler" class="form-control">
                </div> 
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input  value="<?= $scheduler['email'] ?>"  type="email" name="email" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Contato</label>
                    <input value="<?= $scheduler['phone'] ?>" type="text"  id="phone" required name="phone" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-6">
                    <label>Status</label>
                    <select class="form-control" name="status" id="">
                        <option value="">Selecione</option>
                        <option <?= $scheduler['status'] == 0 ? "selected" : ""  ?> value="0">Agendado</option>
                        <option <?= $scheduler['status'] == 1 ? "selected" : ""  ?> value="1">Concluido</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Observações</label>
                    <textarea class="form-control" name="obs" id=""><?= $scheduler['obs'] ?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </form>
    </div>
</main>
<script src="/public/js/msk.js"></script>