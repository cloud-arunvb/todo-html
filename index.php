<?php include_once('./templates/header.php') ?>

<main>
    <div class="col-lg-6 col-xl-4 mx-auto">
        <h2 class="display-1">Todo</h2>
        <section class="card border-0">
            <div class="progress" style="height: 3px;">
                <div class="progress-bar  bg-warning" style="width: 25%" role="progressbar" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div class="card-body text-start">
                <div class="header-title">
                    <div class="left">
                        <span class="date">12</span>
                        <span class="month-year">
                            <span class="month">Jan</span>
                            <span class="year">2021</span>
                        </span>
                    </div>
                    <div class="right">
                        <span class="day">Tuesday</span>
                    </div>
                </div>
                <div class="card-list scroll">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                        <li class="list-group-item">
                            Lorem ipsum dolor sit amet consectetur
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </li>
                    </ul>
                </div>
                <ul class="list-group text-decoration-line-through done scroll" id="doneList">
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur
                        <input class="form-check-input" checked type="checkbox" value="" aria-label="...">
                    </li>
                </ul>
            </div>
            <div class="card-footer bg-dark">
                <form action="" method="post" class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Enter todo" aria-label="Search">
                    <button class="btn btn-warning w-25" type="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
</main>

<?php include_once('./templates/footer.php') ?>