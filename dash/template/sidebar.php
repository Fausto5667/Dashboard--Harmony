<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu"
            class="col-md-3 col-lg-2 d-md-block sidebar collapse text-white bg-dark  padding-and-margin">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link active text-light sidebar-link" aria-current="page" href="index.php">
                            <span data-feather="home" class="align-text-bottom d-flex">
                                <i class="bi bi-house me-1"></i>
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-usuario" aria-expanded="false">
                            Usuários
                        </button>
                        <div class="collapse" id="dashboard-usuario">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text-light">
                                <li>
                                    <a href="cadastro-usuarios.php"
                                        class="link-dark d-inline-flex text-decoration-none rounded text-light">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="listar-usuarios.php"
                                        class="link-dark d-inline-flex text-decoration-none rounded text-light">Visualizar</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-cliente" aria-expanded="false">
                            Produtos
                        </button>
                        <div class="collapse" id="dashboard-cliente">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text-light">
                                <li>
                                    <a href="cadastrar-produtos.php"
                                        class="link-dark d-inline-flex text-decoration-none rounded text-light">Cadastrar
                                        Produtos
                                    </a>
                                </li>
                                <li>
                                    <a href="listar-produtos.php"
                                        class="link-dark d-inline-flex text-decoration-none rounded text-light">Visualizar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-fornecedores" aria-expanded="false">
                            Fornecedores
                        </button>
                        <div class="collapse" id="dashboard-fornecedores">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text-light">
                                <li>
                                    <a href="fornecedores-cad.php"
                                        class="link-dark d-inline-flex text-decoration-none rounded text-light">Cadastrar
                                        Fornecedores
                                    </a>
                                </li>
                                <li>
                                    <a href="fornecedores-cad-listar.php"
                                        class="link-light d-inline-flex text-decoration-none rounded text-light">Visualizar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</div>