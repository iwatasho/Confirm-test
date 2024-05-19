<form method="post" action="{{ route('submitForm') }}">
    @csrf
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender">
        <option value="male" selected>Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>

    <label for="inquiry_type">Inquiry Type:</label>
    <select id="inquiry_type" name="inquiry_type" required>
        <option value="" disabled selected>Select an option</option>
        <option value="billing">Billing</option>
        <option value="technical">Technical Support</option>
        <option value="general">General Inquiry</option>
    </select>

    <button type="submit">Confirmation Screen</button>
</form>
</form>