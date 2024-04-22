<?php 
require_once "header.php";
?>

<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Заявки</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Таблица заявок</h3>

                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>№</th>
                                        <th class="text-center">ФИО</th>
                                        <th>Причина</th>
                                        <th>Дата начало</th>
                                        <th>Дата окончания</th>
                                        <th>Комментария</th>
                                        <th class="text-center">Статус<i
                                                class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>
                                            <button type="button" class="btn btn-primary  align-middle me-2"
                                                data-bs-toggle="modal" data-bs-target="#myModal1">
                                                Посмотреть
                                            </button>
                                        </td>

                                        <td> <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="bx bx-check-double font-size-14 align-middle"></i>
                                                Принять
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                <i class="bx bx-block font-size-14 align-middle"></i>
                                                Отклонить
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>
                                            <button type="button" class="btn btn-primary  align-middle me-2"
                                                data-bs-toggle="modal" data-bs-target="#myModal2">
                                                Посмотреть
                                            </button>
                                        </td>
                                        <td> <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="bx bx-check-double font-size-14 align-middle"></i>
                                                Принять
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                <i class="bx bx-block font-size-14 align-middle"></i>
                                                Отклонить
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>
                                            <button type="button" class="btn btn-primary  align-middle me-2"
                                                data-bs-toggle="modal" data-bs-target="#myModal3">
                                                Посмотреть
                                            </button>
                                        </td>
                                        <td> <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="bx bx-check-double font-size-14 align-middle"></i>
                                                Принять
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                <i class="bx bx-block font-size-14 align-middle"></i>
                                                Отклонить
                                            </button>
                                        </td>

                                        <tr>
                                        <th scope="row">4</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>
                                            <button type="button" class="btn btn-primary  align-middle me-2"
                                                data-bs-toggle="modal" data-bs-target="#myModal4">
                                                Посмотреть
                                            </button>
                                        </td>
                                        <td> <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="bx bx-check-double font-size-14 align-middle"></i>
                                                Принять
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                <i class="bx bx-block font-size-14 align-middle"></i>
                                                Отклонить
                                            </button>
                                        </td>

                                        <tr>
                                        <th scope="row">5</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>
                                            <button type="button" class="btn btn-primary  align-middle me-2"
                                                data-bs-toggle="modal" data-bs-target="#myModal5">
                                                Посмотреть
                                            </button>
                                        </td>
                                        <td> <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="bx bx-check-double font-size-14 align-middle"></i>
                                                Принять
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                <i class="bx bx-block font-size-14 align-middle"></i>
                                                Отклонить
                                            </button>
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="myModal1" tabindex="-1"
                                            aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">
                                                            Диалоговое окно 1</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Здесь можете разместить текст или контент для первой
                                                        кнопки.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="myModal2" tabindex="-1"
                                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                            Диалоговое окно 2</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Здесь можете разместить текст или контент для второй
                                                        кнопки.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="myModal3" tabindex="-1"
                                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                            Диалоговое окно 3</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Здесь можете разместить текст или контент для второй
                                                        кнопки.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="myModal4" tabindex="-1"
                                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                            Диалоговое окно 4</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Здесь можете разместить текст или контент для второй
                                                        кнопки.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="myModal5" tabindex="-1"
                                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                            Диалоговое окно 5</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Здесь можете разместить текст или контент для второй
                                                        кнопки.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>



            <?php 
require_once "footer.php";
?>