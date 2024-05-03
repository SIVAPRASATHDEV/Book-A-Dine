<link rel="stylesheet" href="{{asset('/css/about-index.css')}}">
<x-guest-layout>

  <div class="container-fluid">
    <div class="about-image">
      <img src="{{asset('/pictures/res_images/gallery_3.jpg')}}" alt="image">
      <div class="text">
        About Resturant
      </div>
    </div>
  </div>

  <div class="container ab-1">
    <div class="row">
      <div class="col-6">
        <img src="{{asset('/pictures/res_images/gallery_6.jpg')}}" alt="">
      </div>
      <div class="col-6 ">
        <h1 class="ab-1-head">BOOK A DINE </h1>
        <p class="ab-1-text">
        “Our Restaurant is a celebration of quintessential Indian fare. It embodies South Indians’ love of cooking with fire, a quality that makes our food culture different from the rest of the world” David Higgs.
        Situated in Keyes Art Mile, the growing art and food hub of Rosebank, Our Restaurant boasts a grand wood-fired grill imported from Grill Works in Michigan as the focal point of the restaurant. The concept combines the open-fire trend, seen internationally, with an added pinch of true Indian flair.
        We have long been fascinated by what makes Indian cuisine unique, and we believe it’s down to being meat and flame enthusiasts. It is the timeworn ritual of cooking on wood fires and gathering with friends, the shared experience in the preparation. However, it is not just meat which we celebrate in this way, we boast an array of fresh ingredients all cooked on our perfectly prepared coals including fish, poultry, vegetables and breads.
        </p>
      </div>
    </div>
   
  </div>

  <div class="container ab-2">
    <div class="row">
      <div class="col-6">
        <h1 class="ab-1-head">BOOK A DINE </h1>
        <p class="ab-1-text">
        “Our Restaurant is a celebration of quintessential Indian fare. It embodies South Indians’ love of cooking with fire, a quality that makes our food culture different from the rest of the world” David Higgs.
        Situated in Keyes Art Mile, the growing art and food hub of Rosebank, Our Restaurant boasts a grand wood-fired grill imported from Grill Works in Michigan as the focal point of the restaurant. The concept combines the open-fire trend, seen internationally, with an added pinch of true Indian flair.
        We have long been fascinated by what makes Indian cuisine unique, and we believe it’s down to being meat and flame enthusiasts. It is the timeworn ritual of cooking on wood fires and gathering with friends, the shared experience in the preparation. However, it is not just meat which we celebrate in this way, we boast an array of fresh ingredients all cooked on our perfectly prepared coals including fish, poultry, vegetables and breads.
        </p>
      </div>
      <div class="col-6">
        <img src="{{asset('/pictures/res_images/gallery_7.jpg')}}" alt="">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="contact-form">
      <div class="row">
        <p class="gtn">get in touch</p>
      </div>
      
      <div class="row justify-content-center align-items-center">
        <div class="col-6  ">
            <form action="#">
              
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  aria-describedby="helpId"
                  placeholder="Enter Your Name"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
  
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  aria-describedby="emailHelpId"
                  placeholder="abc@mail.com"
                />
                <small id="emailHelpId" class="form-text text-muted"
                  >Help text</small
                >
              </div>
  
              <div class="mb-3">
                <label for="mno" class="form-label">Mobile number</label>
                <input
                  type="text"
                  class="form-control"
                  name="mno"
                  id="mno"
                  aria-describedby="helpId"
                  placeholder="9876543210"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
  
              <div class="mb-3">
                <label for="des" class="form-label">Write Your Message Here</label>
                <textarea class="form-control" name="des" id="des" rows="3" style="resize: none"
                ></textarea>
              </div>
  
              <div class="row">
                <div class="d-flex gap-5 justify-content-center align-items-center my-5">
  
                    <button
                        type="submit"
                        class="btn btn-primary">Submit
                    </button>
                    <button
                        type="reset"
                        class="btn btn-danger">Reset
                    </button>
                </div>
            </div>
              
            </form>
        </div>
        <div class="col-6">
  
        </div>
      </div>

    </div>
  </div>
    
</x-guest-layout>