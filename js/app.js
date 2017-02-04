var app = angular.module('myapp', ['ngMessages']);
app.controller('productctrl', function ($scope, $http) {
    get_products();
    //delete_products();
    $scope.save_product = function () {
        $http.post("insert.php", {
            'pname': $scope.productname,
            'pqty': $scope.productqty,
            'pprice': $scope.product_price,
            'name': $scope.purchasername,
            'total': $scope.total_amount})
                .success(function (data, status, headers, config) {
                    $scope.msg = "Product save Successfully";
                    get_products();
                    // console.log("Data Inserted Successfully");
                })
    }
    function get_products() {
        $http.get("get_product.php")
                .then(
                        function (response) {
                            //console.log(response);
                            $scope.data = response.data;
                        },
                        function (error) {
                            $scope.data = data;
                            $scope.delete_products();
                        }
                )
    }
    $scope.delete_products = function (id) {
         //alert('helooo called');
        $http.post("delete.php?id=" + id)
                .success(function (data) {
                    //$scope.data.splice(index, 1);
                    $scope.msg = "Data delete scussfully";
                    get_products();
                })
    }
});