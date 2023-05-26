@extends('Layout/user')
@section('awal')
    <link rel="stylesheet" type="text/css" href="User/styles/courses.css">
    <link rel="stylesheet" type="text/css" href="User/styles/courses_responsive.css">
@endsection
@section('navheader')
@endsection

@section('isi')
    <div class="home">

    </div>
    <div class="courses">
        <div class="container">
            <div class="row">
                <!--untuk Sidebar searchnya -->
                <div class="col-sm-4">
                    <div class="course">
                        <h3>Pencarian :</h3>
                        <p class="font-monospace fw-bolder">Jenis Peraturan : <br />
                            <select class="dropdown_item_select" style="width: auto">
                                <option>Category Courses</option>
                                <option>Category</option>
                                <option>Category</option>
                            </select>
                        </p>

                        <p class="font-monospace fw-bolder">Nomor Peraturan :
                        <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
                        </p>
                        <p class="font-monospace fw-bolder">Tahun Peraturan : </p>
                        <p class="font-monospace fw-bolder">Tentang : </p>
                    </div>
                </div>
                <!--tampilan peraturan -->
                <div class="col-sm-8">
                    <div class="course">
                        <p>List peraturan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
@section('akhir')
@endsection
