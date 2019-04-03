<div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Title</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="TITLE" type="text" name="TITLE" class="form-control" placeholder="Please enter the article's title *" required="required" data-error="Title is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Date</label>
                                                        <input id="DATE" type="date" name="DATE" class="form-control" placeholder="Please enter the article's date *" required="required" data-error="Date is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_message">Document</label>
                                                        <textarea id="form_message" name="DOCUMENT" class="form-control" placeholder="Write the article.." rows="5"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_message">Image</label>    
                                                        ////////First upload the image on the server and then get the image url from the db and display it on the website                    
                                                        <input id="IMAGE" type="file" name="IMAGE" class="form-control" placeholder="Browse image*" required="required" data-error="Image is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
