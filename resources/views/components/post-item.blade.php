<article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url($post->thumbnail
                                                 )">
                                                    <a class="img-link" href="single.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                @foreach($post->categories as $category)
                                                <a href="category.html"><span class="post-cat text-primary">{{$category->title}}
                                                        </span></a>
                                                @endforeach
                                                   
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">
                                                        {{$post->title}}
                                                    </a>
                                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">{{$post->published_at}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article> 