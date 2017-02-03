<?php include 'database/config.php'; ?>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css" >
        <link rel="stylesheet" type="text/css" href="css/styles.css.map.css" >
        <script src="http://code.angularjs.org/1.2.6/angular.js"></script> 
        <script type="text/javascript" src="js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.6.1/angular-messages.js"></script>


    </head>
    <body>
        <div class="col-sm-12">
            <div class="row" >
                <div ng-app="myapp" ng-controller="productctrl">
                    <div class="col-lg-6" >
                        <form role="form" name="productForm" >
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" name="pname" type="text" ng-model="productname" required="" >
                                <div ng-messages="productForm.pname.$error">
                                    <div ng-message="required">Please enter a value for this field.</div>
                                </div>
                                <div class="form-group">
                                    <label>Product Qty</label>
                                    <input class="form-control" name="qty" type="text" ng-model="productqty" required="">
                                    <div ng-messages="productForm.qty.$error">
                                        <div ng-message="required">Please enter a value for this field.</div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Price</label>
                                    <input class="form-control" name="pprice" type="text" ng-model="product_price" required="">
                                    <div ng-messages="productForm.pprice.$error">
                                        <div ng-message="required">Please enter a value for this field.</div>

                                    </div>
                                    <div class="form-group">
                                        <label>Purchser  Name</label>
                                        <input class="form-control" name="name" type="text" ng-model="purchasername" required="" >
                                        <div ng-messages="productForm.name.$error">
                                            <div ng-message="required">Please enter a value for this field.</div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Bill</label>
                                        <input class="form-control" name="total" type="text" ng-model="total_amount" required="">
                                        <div ng-messages="productForm.total.$error">
                                            <div ng-message="required">Please enter a value for this field.</div>

                                        </div>
                                    </div>
                                    <button ng-click="save_product()" class="btn btn-default">Submit Button</button>
                                    <!--<input type="button"  value="Submit Button" class="btn btn-default" ng-click="save_product">-->
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                    {{msg}}
                                    </form>

                                </div>

                            </div>
                            <div class="col-md-3">
                            <input type="text" ng-model="searchFilter">
                            </div>
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Product ID
                                        </th>
                                        <th>
                                            Product Name
                                        </th>
                                        <th>
                                            Product Qty
                                        </th>
                                        <th>
                                            Product Price
                                        </th>
                                        <th>
                                            Purchaser Name
                                        </th>
                                        <th>
                                            Total Bill
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="data in data |filter:searchFilter">
                                        <td>
                                            {{data.id}}
                                        </td>
                                        <td>
                                            {{data.pname}}
                                        </td>
                                        <td>
                                            {{data.pqty}}
                                        </td>
                                        <td>
                                            {{data.pprice}}
                                        </td>
                                        <td>
                                            {{data.name}}
                                        </td>
                                        <td>
                                            {{data.total}}
                                        </td>
                                    </tr>

                            </table>
                    </div> 
                </div>
                </body>

                </html>
