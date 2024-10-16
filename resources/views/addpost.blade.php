<x-header/>

<section class="float-start w-100 banner_section_subbanner">
    <div class="container">
       <h2 class="text-white"> Create post </h2>
       <nav aria-label="breadcrumb ">
          <ol class="mt-3 text-white breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="text-white breadcrumb-item active"> Create post </li>
          </ol>
        </nav>

    </div>
  </section>


  <main class="float-start w-100 main-body ">

      <div class="mb-5 news-details-post">
          <div class="container">
            <div class="mx-auto col-lg-10">
              <div class="text-center page-heading">
                  <h2> Publish a  <span> new listing  </span>  </h2>
                  <p class="mt-1"> You can buy or sell anything with the classiads platform easy and user friendly </p>
                </div>

           <form name="frmadd" action="{{ URL::to('addposts') }}" method="POST" enctype="multipart/form-data">
             @csrf
              <div class="mt-4 card w-100">
                  <div class="card-header">
                      Category
                  </div>
                  <div class="p-4 c-details w-100 d-inline-block">
                      <div class="form-group">
                      <label class="form-label"> Select best-matching category* </label>
                    <select class="form-select" name="category" aria-label="Default select example" required>
                        <option selected disabled> Category </option>
                        <option value="Web Scraping"> Web Scraping</option>
                        <option value="Finance advisory"> Finance advisory</option>
                        <option value="Blogging"> Blogging</option>
                        <option value="Health"> Health</option>
                    </select>
                      </div>

                  </div>
              </div>

              <div class="mt-4 card w-100">
                  <div class="card-header">
                      Location
                  </div>
                  <div class="p-4 c-details w-100 d-inline-block">
                       <div class="row gy-4">
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <label class="form-label"> Where is your item located?* </label>
                                    <select class="form-select" name="location" required>
                                        <option selected disabled> City/Region </option>
                                        <option value="Japan"> Japan </option>
                                        <option value="Franch"> Franch </option>
                                        <option value="UK"> UK </option>
                                        <option value="India"> India </option>
                                    </select>
                              </div>
                          </div>

                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-label"> City Area </label>
                                  <input type="text"name="city" class="form-control" required>
                              </div>
                          </div>

                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-label">  Address </label>
                                  <input type="text" name="address" class="form-control" required>
                              </div>
                          </div>

                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-label">  ZIP </label>
                                  <input type="text" name="zip" class="form-control" required>
                              </div>
                          </div>
                       </div>
                  </div>
              </div>

              <div class="mt-4 card w-100">
                  <div class="card-header">
                      About you
                  </div>
                  <div class="p-4 c-details w-100 d-inline-block">
                       <div class="row gy-4">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-label"> Your Name </label>
                                  <input type="text" name="name" class="form-control" required/>
                              </div>
                          </div>

                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-label"> Mobile Phone </label>
                                  <input type="text" name="phone" class="form-control" required />
                              </div>
                          </div>

                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-label">  E-mail* </label>
                                  <input type="text" name="email" class="form-control" required />
                              </div>
                          </div>
                       </div>
                  </div>
              </div>

              <div class="mt-4 card w-100">
                  <div class="card-header">
                      Price
                  </div>
                  <div class="p-4 c-details w-100 d-inline-block">
                       <div class="row align-items-center gy-4">
                          <div class="col-lg-6">
                              <div class="form-group d-flex">
                                  <select class="form-select w-25">
                                      <option selected>USD($)</option>
                                  </select>
                                  <input type="text w-75" name="price" class="form-control" required/>
                              </div>
                          </div>

                          <div class="col-lg-6">

                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                              <label class="form-label"> Transaction </label>
                                <select class="form-select" name="transaction" aria-label="Default select example">
                                    <option selected disabled> Transaction </option>
                                    <option value="Test 1"> Test 1 </option>
                                    <option value="Test 2"> Test 2 </option>
                                </select>
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                              <label class="form-label"> Condition </label>
                                <select class="form-select" name="conditions" aria-label="Default select example">
                                    <option selected disabled> Condition </option>
                                    <option value="New"> New </option>
                                    <option value="Used"> Used </option>
                                    <option value="Refurbished"> Refurbished </option>
                                    <option value="For Parts"> For Parts </option>
                                </select>
                              </div>
                          </div>
                       </div>
                  </div>
              </div>

              <div class="mt-4 card w-100">
                  <div class="card-header">
                      Description
                  </div>
                  <div class="p-4 c-details w-100 d-inline-block">
                       <div class="row align-items-center gy-4">


                          <!-- <div class="col-lg-6">
                              <div class="d-flex align-items-center">
                                   <div class="form-check">
                                      <input class="form-check-input" type="radio" name="lang" value="" id="flexCheckDefaultl">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Chinese
                                      </label>
                                    </div>
                                    <div class="form-check ms-3">
                                      <input class="form-check-input" type="radio" name="lang" value="" id="flexCheckCheckedl" checked>
                                      <label class="form-check-label" for="flexCheckChecked">
                                        English
                                      </label>
                                    </div>
                                    <div class="form-check ms-3">
                                      <input class="form-check-input" type="radio" name="lang" value="" id="flexCheckCheckedl2" checked>
                                      <label class="form-check-label" for="flexCheckChecked">
                                          Persian
                                      </label>
                                    </div>
                                    <div class="form-check ms-3">
                                      <input class="form-check-input" type="radio" name="lang" value="" id="flexCheckCheckedl3" checked>
                                      <label class="form-check-label" for="flexCheckChecked">
                                          Arabic
                                      </label>
                                    </div>
                                    <div class="form-check ms-3">
                                      <input class="form-check-input" type="radio" name="lang" value="" id="flexCheckCheckedl3" checked>
                                      <label class="form-check-label" for="flexCheckChecked">
                                          Russian
                                      </label>
                                    </div>
                              </div>
                          </div> -->

                          <div class="col-lg-12">
                              <div class="form-group">
                                  <label class="form-label">  Title * </label>
                                  <input type="text" name="item_title" class="form-control" required />
                              </div>
                          </div>

                          <div class="col-lg-12">
                              <div class="form-group">
                                  <label class="form-label">  Description * </label>
                                  <textarea class="form-control dest-div" name="item_description" required></textarea>
                              </div>
                          </div>
                       </div>
                  </div>
              </div>

              <div class="mt-4 card w-100">
                  <div class="card-header">
                      Photos
                  </div>
                  <div class="p-4 c-details w-100 d-inline-block">
                      <p> You can upload up to 8 pictures per listing </p>
                      <div class="p-0 mt-3 upload__box">
                          <div class="upload__btn-box">
                            <label class="upload__btn btn-all">
                              <p> <i class="ri-folder-image-line"></i> Upload images</p>
                              <input type="file" name="photos[]" multiple class="upload__inputfile" required>
                            </label>
                          </div>
                          <div class="p-4 upload__img-wrap bg-light"></div>
                        </div>
                  </div>
              </div>
              <button type="submit" class="mt-4 btn btn-all w-100"> Publish item </button>
           </form>
            </div>
         </div>
      </div>
  </main>

<x-footer/>
