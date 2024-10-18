<x-header/>
<section class="float-start w-100 banner_section_subbanner">
    <div class="container">
       <h2 class="text-white"> Directory Details </h2>
       <nav aria-label="breadcrumb ">
          <ol class="mt-3 text-white breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="text-white breadcrumb-item active"> Directory Details </li>
          </ol>
        </nav>

    </div>
  </section>


  <main class="float-start w-100 main-body ">

      <div class="products-details-sec ">
          <div class="container">
              <div class="row gx-lg-5">
                  <div class="col-lg-8">

                       <div class="mb-4 row align-items-center">
                          <div class="col-lg-8">
                               <h2 class="pr-ti"> {{ $data->item_title }} </h2>
                               <p class="mt-1"> {{ $data->address }} </p>
                          </div>
                          <div class="col-lg-4 d-grid justify-content-lg-end">
                              <h1 class="minprices"> $ {{ $data->price }} </h1>
                          </div>
                       </div>

                        <ul class="nav nav-tabs main-tabsd" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab"
                             data-bs-toggle="tab" data-bs-target="#home" type="button"
                              role="tab"> <i class="ri-folder-image-line"></i> Images</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" type="button" role="tab">
                            <i class="ri-map-pin-line"></i> Location</button>
                          </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel">

                              <div class="products-slide-1">

                                <div id="sync1" class="owl-carousel owl-theme">
                                    @if($data->photos)
                                        @php
                                            $imagePaths = explode(',', $data->photos); 
                                        @endphp

                                        <div class="item">
                                            <a href="{{ asset('uploads/' . $imagePaths[0]) }}" data-fancybox="" class="mian-ppic">
                                                <img src="{{ asset('uploads/' . $imagePaths[0]) }}" alt="main-image"/>
                                            </a>
                                        </div>

                                       
                                        @foreach(array_slice($imagePaths, 1) as $image)
                                            <div class="item">
                                                <a href="{{ asset('uploads/' . $image) }}" data-fancybox="" class="mian-ppic">
                                                    <img src="{{ asset('uploads/' . $image) }}" alt="additional-image"/>
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="item">
                                            <a href="{{ asset('images/default-image.jpg') }}" data-fancybox="" class="mian-ppic">
                                                <img src="{{ asset('images/default-image.jpg') }}" alt="default-image"/>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                <div id="sync2" class="owl-carousel owl-theme">
                                    @if($data->photos)
                                        @php
                                            $imagePaths = explode(',', $data->photos);
                                        @endphp
                                        @foreach($imagePaths as $image)
                                            <div class="item">
                                                <div class="thum-pic-slide">
                                                    <figure>
                                                        <img src="{{ asset('uploads/' . $image) }}" alt="thumbnail"/>
                                                    </figure>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="item">
                                            <div class="thum-pic-slide">
                                                <figure>
                                                    <img src="{{ asset('images/default-image.jpg') }}" alt="default-thumbnail"/>
                                                </figure>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                          </div>


                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel">
                            <div class="map-01">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="200" frameborder="0" style="border:0"></iframe>
`                           </div>
                          </div>

                        </div>




                      <div class="mt-3 bottom-details">
                          <div class="d-flex align-items-center justify-content-between w-100">
                             <p> <i class="ri-time-line"></i> 10 days ago </p>
                             <p class="post-id"> ID #29 </p>
                          </div>
                          <h2 class="mt-4 he-heain"> Product Description </h2>
                           <hr/>
                           <p> {{$data->item_description}}</p>

                          <h2 class="mt-5 he-heaing"> Attributes </h2>
                          <hr/>

                          <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Status</th>
                                  <th scope="col">Subjects</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Morbi rhoncus</td>
                                  <td>Morbi ac quam</td>
                                </tr>
                                <tr>
                                  <td>Morbi rhoncus</td>
                                  <td>Morbi ac quam</td>
                                </tr>


                              </tbody>
                            </table>


                    </div>

                  </div>
                  <div class="col-lg-4">
                      <div class="pb-4 comon-box-divs bt bg-light w-100 d-inline-block">
                           <div class="px-4 pt-4 user-divcs">
                              <div class="row">
                                  <div class="col-sm-3">
                                      <figure>
                                          <img alt="ser" src="{{asset('images/profile8.jpg')}}"/>
                                      </figure>
                                  </div>
                                  <div class="col-lg-9">
                                      <div class="contents-text ps-3">
                                          <h5> {{$data->name}} </h5>
                                          <p> Posting for 5+ years </p>
                                          <a href="#" class="p-0 btn"> View profile </a>
                                      </div>
                                  </div>
                              </div>
                           </div>
                           <hr/>
                           <div class="px-4 contast-info">
                              <h5 class="call-text"> <a href="#"> <i class="ri-phone-line"></i> {{$data->phone}} </a> </h5>
                              <a href="#" class="mt-3 btn btn-all w-100"> <i class="ri-question-answer-line"></i>  Message seller </a>
                           </div>
                           <hr/>
                           <div class="px-4 listk-info">
                                <ul>
                                  <li> <a href="#"> Browse all seller's ads</a> </li>
                                  <li class="my-2"> <a href="#"> Print listing </a> </li>
                                  <li> <a href="#"> Download in PDF </a> </li>
                                </ul>
                           </div>
                           <hr/>
                           <div class="px-3 listk-info">
                              <div class="d-flex align-items-center justify-content-between">
                                   <a href="#" class="btn btn-all"> <i class="ri-save-line"></i> Save </a>
                                   <a href="#" class="btn btn-all tbn-alos ms-2">  Recommend </a>
                              </div>
                           </div>
                      </div>

                      <div class="mt-5 comonsts d-inline-block w-100">
                          <div class="card">
                              <div class="card-header">
                                  Comments
                              </div>
                              <div class="tabsk">
                                  <div class="my-4 submit-review ps-lg-3">

                                      <form action="kl" method="get">

                                      <div class="row w-100">
                                              <div class="col-lg-12 form-group">
                                              <input type="text" class="form-control" placeholder="Full Name">

                                              </div>
                                              <div class="col-lg-12 form-group">
                                                 <input type="text" class="form-control" placeholder="Email">

                                              </div>
                                              <div class="col-lg-12 form-group">
                                                 <textarea class="form-control ted"></textarea>
                                              </div>
                                              <div class="col-lg-12 form-group">
                                                  <button type="submit" class="mt-2 btn w-100 btn-all crat-btnh ">
                                                      Submit
                                                      <span>
                                                          <i class="ri-send-plane-fill"></i>
                                                     </span>
                                                 </button>
                                              </div>





                                      </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>


              </div>




              <div class="my-5 related-produc d-inline-block w-100">

                     <div class="page-heading">
                      <h2> Related <span> Products </span>  </h2>

                    </div>
                 
                    <div class="mt-4 shop-slider owl-carousel owl-theme">
                    @foreach ($relatedProducts as $related)
                        <div class="bg-white comons-items-divs w-100 d-inline-block">
                          <div class="img-box-post">
                              <a href="{{ url('details/' . $related->id) }}">
                                @if ($related->photos)
                                    @php
                                        $relatedImagePaths = explode(',', $related->photos); // Split the string into an array
                                    @endphp
                                    <img alt="related-postpic" src="{{ asset('uploads/' . $relatedImagePaths[0]) }}"/> 
                                @else
                                    <img alt="related-postpic" src="{{ asset('images/default-image.jpg') }}"/>
                                @endif
                            </a>
                          </div>
                          <div class="pt-3 contents-div">
                          <h5>{{ $related->item_title }}</h5>
                          <h2 class="mt-2 mb-3">{{ $related->price }} $</h2>
                            <p class="cm-tags"> <i class="ri-folder-5-line"></i>  {{ $related->transaction }}</p>
                            <p class="mt-2 cm-tags"> <i class="ri-time-line"></i> 10 Days ago </p>
                            <div class="mt-3 d-flex ft-li align-items-center">
                                <p> Ireton, US </p>
                                <a href="#"> <i class="ri-heart-line"></i> </a>
                            </div>
                          </div>

                        </div>
                      @endforeach
                    </div>
                 
             </div>
         </div>
      </div>

  </main>
  <x-footer/>
