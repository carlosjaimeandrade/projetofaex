<main>
    <div class="container">
        <div class="container-actions">
            <h4>Criar agendamento</h4>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/panel/scheduler/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agendamento</li>
            </ol>
        </nav>
        <form method="post" action="/panel/scheduler/create/save">
            <div class="row mt-5">
                <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input type="name" required name="name_scheduler" class="form-control"
                        placeholder="Nome da agenda">
                </div>
                <div class="form-group col-md-6">
                    <label>Data</label>
                    <input type="datetime-local" required name="date_scheduler" class="form-control">
                </div> 
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Contato</label>
                    <input type="text"  id="phone" required name="phone" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-6">
                    <label>Status</label>
                    <select class="form-control" name="status" id="">
                        <option value="">Selecione</option>
                        <option value="0">Agendado</option>
                        <option value="1">Concluido</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Observações</label>
                    <textarea class="form-control" name="obs" id=""></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </form>
    </div>
</main>
<script src="/public/js/msk.js"></script>