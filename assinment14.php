<!-- Question 1:

You have a Laravel application with a form that submits user information using a POST request. Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name. -->


public function store(Request $request)
{
    $name = $request->input('name');

}


<!-- Question 2:

In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request. Write the code to accomplish this and store the value in a variable called $userAgent. -->

public function store(Request $request)
{
    $userAgent = request()->header('User-Agent');

}

<!-- Question 3:

You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter. Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page. If the parameter is not present, set $page to null. -->

public function Endpoint(Request $request)
{
    $page = $request->input('page', null);
    
}

<!-- Question 4:
Create a JSON response in Laravel with the following data:

{
    "message": "Success",
    "data": {
        "name": "John Doe",
        "age": 25
    }

} -->

public function Endpoint()
{
    $data = [
        'message' => 'Success',
        'data' => [
            'name' => 'John Doe',
            'age' => 25
        ]
    ];

    return response()->json($data);
}


<!-- Question 5:
You are implementing a file upload feature in your Laravel application. Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file. -->

public function FileUpload(Request $request)
    {
        $uploadedFile = $request->file('avatar');
        $uploadedFileName = $uploadedFile->getClientOriginalName();
        $uploadedFilePath = $uploadedFile->storeAs('uploads', $uploadedFileName, 'public');
}

<!-- Question 6:
Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null. -->

public function Endpoint(Request $request)
{
    $rememberToken = $request->cookie('remember_token', null);

}

<!-- Question 7:
Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data:
{
    "success": true,
    "message": "Form submitted successfully."
} -->

Route::post('/submit', function (Request $request) {
    
    $email = $request->input('email');
    
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
