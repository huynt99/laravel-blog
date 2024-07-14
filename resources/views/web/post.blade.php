@extends('layouts.site')

@section('title')
    {{__('messages.post_page.title')}}
@endsection

@section('content')
    <section class="bg0 p-b-140 p-t-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-30">
                    <div class="p-r-10 p-r-0-sr991">
                        <!-- Blog Detail -->
                        <div class="p-b-70">
                            <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                                {{$data['post']->category->name}}
                                <span> > </span>
                                {{$data['post']->title}}
                            </a>

                            <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                {{$data['post']->title}}
                            </h3>

                            <div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										{{__('values.by')}} {{ $data['post']->writer }}
									</a>

									<span class="m-rl-3">-</span>

									<span>
                                        {{ $data['post']->created_at }}
									</span>
								</span>
                            </div>

                            <div class="wrap-pic-max-w p-b-30">
                                <img src="{{asset($data['post']->image)}}" alt="IMG">
                            </div>

                            <p class="f1-s-11 cl6 p-b-25">
                                {{ $data['post']->content}}
                            </p>

                            <!-- category -->
                            <div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
								{{__('values.category')}} :
								</span>

                                <div class="flex-wr-s-s size-w-0">
                                    <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                        {{ $data['post']->category->name }}
                                    </a>

                                </div>
                            </div>

                            <!-- Share -->
                            <div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>

                                <div class="flex-wr-s-s size-w-0">
                                    <a href="#"
                                       class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-facebook-f m-r-7"></i>
                                        Facebook
                                    </a>

                                    <a href="#"
                                       class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-linkedin m-r-7"></i>
                                        LinkedIn
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Leave a comment -->
                    <div>
                        <h4 class="f1-l-4 cl3 p-b-12">
                            {{__('messages.post_page.comment')}}
                        </h4>

                        <form>
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20"
                                          name="msg" placeholder="Comment...">
                            </textarea>

                            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text"
                                   name="name" placeholder="Name*">

                            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text"
                                   name="email" placeholder="Email*">

                            <button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                Post Comment
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-10 col-lg-4 p-b-30">
                    <div class="p-l-10 p-rl-0-sr991 p-t-70">
                        <!-- Popular Posts -->
                        <div class="p-b-30">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Popular Post
                                </h3>
                            </div>

                            <ul class="p-t-35">
                                <li class="flex-wr-sb-s p-b-30">
                                    <a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('web/images/popular-post-04.jpg')}}" alt="IMG">
                                    </a>

                                    <div class="size-w-11">
                                        <h6 class="p-b-4">
                                            <a href="#" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                Donec metus orci, malesuada et lectus vitae
                                            </a>
                                        </h6>

                                        <span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Music
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Tag -->
                        <div class="p-b-30">
                            <div class="how2 how2-cl4 flex-s-c m-b-30">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Tags
                                </h3>
                            </div>

                            <div class="flex-wr-s-s m-rl--5">
                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Fashion
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    News
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Blogs
                                </a>
                            </div>
                        </div>

                        <!-- Archive -->
                        <div class="p-b-30">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Archive
                                </h3>
                            </div>

                            <ul class="p-t-32">
                                <li class="p-rl-4 p-b-19">
                                    <a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											July 2024
										</span>

                                        <span>
											(9)
										</span>
                                    </a>
                                </li>

                                <li class="p-rl-4 p-b-19">
                                    <a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											June 2024
										</span>

                                        <span>
											(39)
										</span>
                                    </a>
                                </li>

                                <li class="p-rl-4 p-b-19">
                                    <a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											May 2023
										</span>

                                        <span>
											(29)
										</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Category -->
                        <div class="p-b-30">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Category
                                </h3>
                            </div>

                            <ul class="p-t-35">
                                @foreach($data['categories'] as $cat)
                                <li class="how-bor3 p-rl-4">
                                    <a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                        {{$cat->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
