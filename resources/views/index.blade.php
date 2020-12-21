@extends('Layout.master')
@section('title','Home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Home Page Content in index</h1>
            <div>
                <p>
                    <br>
                    The <strong>Model-View-Controller (MVC)</strong> is an architectural pattern that separates an application into three main logical 
                    components: the <strong>model, the view, and the controller</strong>.
                    <br>Each of these components are built to handle specific development aspects of an application.
                    <br>MVC is one of the most frequently used industry-standard web development framework to create scalable and extensible projects.
                    <br>
                    <br>
                    <br>
                    <strong>MVC Components</strong>
                    <br>
                    Following are the components of MVC −
                    <br>
                    <img src="/image/model_view_controller.jpg" alt="MVC Image">
                    <br>
                    <br>
                    <br>
                    <strong>Model</strong>
                    <br>
                    The Model component corresponds to all the data-related logic that the user works with. 
                    <br>This can represent either the data that is being transferred between the View and Controller components or 
                    any other business logic-related data.<br> For example, a Customer object will retrieve the customer information from the database,
                    manipulate it and update it data back to the database or use it to render data.
                    <br>
                    <br>
                    <br>
                    <strong>View</strong>
                    <br>
                    The View component is used for all the UI logic of the application. 
                    <br>For example, the Customer view will include all the UI components such as text boxes, dropdowns, etc.
                    that the final user interacts with.
                    <br>
                    <br>
                    <br>
                    <strong>Controller</strong>
                    <br>
                    Controllers act as an interface between Model and View components to process all the business logic and incoming requests,<br>
                    manipulate data using the Model component and interact with the Views to render the final output.
                    <br>For example, the Customer controller will handle all the interactions and inputs from the Customer View and update the database
                    using the Customer Model.<br> The same controller will be used to view the Customer data.
                </p>
            </div>
        </div>
    </div>
</div>


@endsection