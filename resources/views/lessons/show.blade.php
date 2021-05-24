@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">{{$lesson->title}}</h1>
                </div>
            </div>
        </div>

        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-8">
                            <div class="recent-news blog-lg">
                                <div class="action-box blog-lg">
                                    <iframe title="{{$lesson->title}}" src="{{$lesson->url}}" width="80%" height="600px"
                                            allowfullscreen
                                            @if($lesson->type == 'video')
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            @endif
                                    ></iframe>
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">
                                        <li><i class="fa fa-calendar"></i>{{now()->diffInDays($lesson->created_at)}}
                                        </li>
                                        <li><i class="fa fa-comments-o"></i>8 Comments</li>
                                    </ul>
                                    <h5 class="post-title">{{$lesson->title}}</h5>
                                    <a href="{{route('course.show', $lesson->course)}}"><span>Course: {{$lesson->course->title}}</span></a>
                                </div>
                            </div>
                            <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                            <div class="clear" id="comment-list">
                                <div class="comments-area" id="comments">
                                    <h2 class="comments-title">8 Comments</h2>
                                    <div class="clearfix m-b20">
                                        <!-- comment list END -->
                                        <ol class="comment-list">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"><img class="avatar photo"
                                                                                           src="assets/images/testimonials/pic1.jpg"
                                                                                           alt=""> <cite class="fn">John
                                                            Doe</cite> <span class="says">says:</span></div>
                                                    <div class="comment-meta"><a href="#">December 02, 2019 at 10:45
                                                            am</a></div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                        vitae neqnsectetur adipiscing elit. Nam viae neqnsectetur
                                                        adipiscing elit.
                                                        Nam vitae neque vitae sapien malesuada aliquet.</p>
                                                    <div class="reply"><a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                                <ol class="children">
                                                    <li class="comment odd parent">
                                                        <div class="comment-body">
                                                            <div class="comment-author vcard"><img class="avatar photo"
                                                                                                   src="assets/images/testimonials/pic2.jpg"
                                                                                                   alt=""> <cite
                                                                        class="fn">John Doe</cite> <span class="says">says:</span>
                                                            </div>
                                                            <div class="comment-meta"><a href="#">December 02, 2019 at
                                                                    10:45 am</a></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nam vitae neque vitae sapien malesuada aliquet.
                                                                In viverra dictum justo in vehicula. Fusce et massa eu
                                                                ante ornare molestie. Sed vestibulum sem felis,
                                                                ac elementum ligula blandit ac.</p>
                                                            <div class="reply"><a href="#" class="comment-reply-link">Reply</a>
                                                            </div>
                                                        </div>
                                                        <ol class="children">
                                                            <li class="comment odd parent">
                                                                <div class="comment-body">
                                                                    <div class="comment-author vcard"><img
                                                                                class="avatar photo"
                                                                                src="assets/images/testimonials/pic3.jpg"
                                                                                alt=""> <cite class="fn">John Doe</cite>
                                                                        <span class="says">says:</span></div>
                                                                    <div class="comment-meta"><a href="#">December 02,
                                                                            2019 at 10:45 am</a></div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Nam vitae neque vitae sapien
                                                                        malesuada aliquet.
                                                                        In viverra dictum justo in vehicula. Fusce et
                                                                        massa eu ante ornare molestie. Sed vestibulum
                                                                        sem felis,
                                                                        ac elementum ligula blandit ac.</p>
                                                                    <div class="reply"><a href="#"
                                                                                          class="comment-reply-link">Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                        <!-- list END -->
                                                    </li>
                                                </ol>
                                                <!-- list END -->
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"><img class="avatar photo"
                                                                                           src="assets/images/testimonials/pic1.jpg"
                                                                                           alt=""> <cite class="fn">John
                                                            Doe</cite> <span class="says">says:</span></div>
                                                    <div class="comment-meta"><a href="#">December 02, 2019 at 10:45
                                                            am</a></div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                        vitae neque vitae sapien malesuada aliquet.
                                                        In viverra dictum justo in vehicula. Fusce et massa eu ante
                                                        ornare molestie. Sed vestibulum sem felis,
                                                        ac elementum ligula blandit ac.</p>
                                                    <div class="reply"><a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"><img class="avatar photo"
                                                                                           src="assets/images/testimonials/pic2.jpg"
                                                                                           alt=""> <cite class="fn">John
                                                            Doe</cite> <span class="says">says:</span></div>
                                                    <div class="comment-meta"><a href="#">December 02, 2019 at 10:45
                                                            am</a></div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                        vitae neque vitae sapien malesuada aliquet.
                                                        In viverra dictum justo in vehicula. Fusce et massa eu ante
                                                        ornare molestie. Sed vestibulum sem felis,
                                                        ac elementum ligula blandit ac.</p>
                                                    <div class="reply"><a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"><img class="avatar photo"
                                                                                           src="assets/images/testimonials/pic3.jpg"
                                                                                           alt=""> <cite class="fn">John
                                                            Doe</cite> <span class="says">says:</span></div>
                                                    <div class="comment-meta"><a href="#">December 02, 2019 at 10:45
                                                            am</a></div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                        vitae neque vitae sapien malesuada aliquet.
                                                        In viverra dictum justo in vehicula. Fusce et massa eu ante
                                                        ornare molestie. Sed vestibulum sem felis,
                                                        ac elementum ligula blandit ac.</p>
                                                    <div class="reply"><a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                        <!-- comment list END -->
                                        <!-- Form -->
                                        <div class="comment-respond" id="respond">
                                            <h4 class="comment-reply-title" id="reply-title">Leave a Reply <small> <a
                                                            style="display:none;" href="#"
                                                            id="cancel-comment-reply-link" rel="nofollow">Cancel
                                                        reply</a> </small></h4>
                                            <form class="comment-form" id="commentform" method="post">
                                                <p class="comment-form-author">
                                                    <label for="author">Name <span class="required">*</span></label>
                                                    <input type="text" value="" name="Author" placeholder="Author"
                                                           id="author">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label for="email">Email <span class="required">*</span></label>
                                                    <input type="text" value="" placeholder="Email" name="email"
                                                           id="email">
                                                </p>
                                                <p class="comment-form-url">
                                                    <label for="url">Website</label>
                                                    <input type="text" value="" placeholder="Website" name="url"
                                                           id="url">
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label for="comment">Comment</label>
                                                    <textarea rows="8" name="comment" placeholder="Comment"
                                                              id="comment"></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input type="submit" value="Submit Comment" class="submit"
                                                           id="submit" name="submit">
                                                </p>
                                            </form>
                                        </div>
                                        <!-- Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- blog END -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



