<form>
    <h1>Login</h1>
    <input type="text" name="email" value="{{ old('email') }}" required autofocus>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
