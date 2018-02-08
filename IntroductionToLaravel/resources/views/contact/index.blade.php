<h3>This a view Index!</h3>

<h4>Using Array:</h4>

@foreach($contactsArray as $contact)
    <p>{{ $contact['name'] }}</p>
    <p>{{ $contact['phonenumber'] }}</p>
@endforeach


<h4>Using Array:</h4>

@foreach($contactsObject as $contact)
    <p>{{ $contact->name }}</p>
    <p>{{ $contact->phonenumber }}</p>
@endforeach
