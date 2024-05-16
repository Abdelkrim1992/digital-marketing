<form class="forms-sample" method="POST" action="{{route('page.store')}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="title" >Title</label>
                        <input type="text" class="form-control" id="title_id" name="title"  >
                      </div>
                      <div class="form-group ">
                        <label for="type" >Type</label>
                        <select class="form-control" name="type">
                           <option value="about_us">About Us</option>
                           <option value="contact_us">Contact Us</option>
                        </select> 
                      </div>
                      <div class="form-group ">
                        <label for="title" >Description</label>
                        <textarea type="text" class="form-control" id="editor" name="description"  ></textarea>
                        <script>
	                        ClassicEditor
	                          	.create( document.querySelector( '#editor' ) ),
                              {
                                ckfinder:
                                {
                                  uploadURL:"{{route('page.upload')}}",
                                }
                              }
	                           	.catch( error => {
	                        		console.error( error );} 
                              );
                        </script>
                      </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>        