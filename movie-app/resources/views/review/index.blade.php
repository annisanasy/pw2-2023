@extends('layouts/main')

@section('content')
<h1 class="mt-4">Reviews Data</h1>
                        <div class="d-flex justify-content-between mb-4">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                            <a href="#">
                                <button class="btn btn-success" type="submit">Create Data</button>
                            </a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Reviews Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Film</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Tanggal</th>
                                            <th>Review</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Film</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Tanggal</th>
                                            <th>Review</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>The Shawshank Redemption</td>
                                            <td>John Doe</td>
                                            <td>9.5</td>
                                            <td>This movie is a masterpiece. The acting, the storyline, and the ending are all fantastic</td>
                                            <td>2022-03-12</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Parasite</td>
                                            <td>Mark Johnson</td>
                                            <td>9.0</td>
                                            <td>This movie is a gripping social commentary that is both humorous and thought provoking. Highly recommended</td>
                                            <td>2022-05-01</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Inception</td>
                                            <td>Jane Smith</td>
                                            <td>8.5</td>
                                            <td>The concept of this movie is mind bending and the special effects are incredible. However are felt the plot was a bit convoluted at times.</td>
                                            <td>2022-04-23</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Jalan yang Jauh Jangan Lupa Pulang</td>
                                            <td>Angga Dwimas Sasongko</td>
                                            <td>8.8</td>
                                            <td>Gaya storytelling dalam film ini terasa khas banget dengan Angga Dwimas Sasongko. Kali ini sang sutradara seperti ingin membuat visualisasi layaknya penonton sedang membaca novel.</td>
                                            <td>2023</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Imperfect</td>
                                            <td>Ernest Prakasa</td>
                                            <td>8.5</td>
                                            <td>Imperfect memang mengangkat sebuah isu yang kerap kali terjadi dalam gaya hidup sehari-hari. Dan dalam film ini, Rara memang adalah sang tokoh utama. Tapi kita juga dapat melihat, bahwa perasaan insecure dialami oleh beberapa tokohnya sekaligus.</td>
                                            <td>2019</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection