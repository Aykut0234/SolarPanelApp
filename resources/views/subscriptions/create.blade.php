
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Subscription</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('subscriptions.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="customer_name">Customer Name:</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_email">Customer Email:</label>
                                <input type="email" class="form-control" id="customer_email" name="customer_email" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_address">Customer Address:</label>
                                <input type="text" class="form-control" id="customer_address" name="customer_address" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_phone">Customer Phone:</label>
                                <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_zip">Customer Zip:</label>
                                <input type="text" class="form-control" id="customer_zip" name="customer_zip" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_city">Customer City:</label>
                                <input type="text" class="form-control" id="customer_city" name="customer_city" required>
                            </div>
                            <div class="form-group">
                                <label for="solar_panel_system_id">Solar Panel System ID:</label>
                                <input type="text" class="form-control" id="solar_panel_system_id" name="solar_panel_system_id" required>
                            </div>

                           <div class="form-group">
    


                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
