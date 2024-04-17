<?php 
require_once "header.php";
?>




<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">ПЛАН</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">План</a></li>
                            <li class="breadcrumb-item active">Отправить выполненные задачи</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="repeater" enctype="multipart/form-data">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item class="row">
                                    <div class="mb-3 col-lg-2">
                                        <p class="form-label">1: Аъзои гурӯхи кории Шӯрои олимони донишгоҳ</p>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="file">Выберите файл</label>
                                        <input type="file" class="form-control-file" id="file" name="file">
                                    </div>



                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="credit">Кредит</label>
                                        <input type="text" id="credit" name="credit" class="form-control">
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="status">Статус</label>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="comment">Комментарий</label>
                                        <textarea id="comment" name="comment" class="form-control"></textarea>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label">Дата добавления</label>
                                        <input type="text" class="form-control" value="" disabled>
                                    </div>

                                    <div class="col-lg-10"></div> 
                                    <div class="col-lg-2 d-flex justify-content-end">
                                        <div class="mb-3 align-self-center">
                                            <input data-repeater-create type="button" class="btn btn-success"
                                                value="Отправить" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="repeater" enctype="multipart/form-data">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item class="row">
                                    <div class="mb-3 col-lg-2">
                                        <p class="form-label">2: Аъзои гурӯхи кории Шӯрои олимони донишгоҳ</p>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="file">Выберите файл</label>
                                        <input type="file" class="form-control-file" id="file" name="file">
                                    </div>


                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="credit">Кредит</label>
                                        <input type="text" id="credit" name="credit" class="form-control">
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="status">Статус</label>

                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label" for="comment">Комментарий</label>
                                        <textarea id="comment" name="comment" class="form-control"></textarea>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label">Дата добавления</label>
                                        <input type="text" class="form-control" value="" disabled>
                                    </div>

                                    <div class="col-lg-10"></div> 
                                    <div class="col-lg-2 d-flex justify-content-end">
                                        <div class="mb-3 align-self-center">
                                            <input data-repeater-create type="button" class="btn btn-success"
                                                value="Отправить" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
require_once "footer.php";
?>