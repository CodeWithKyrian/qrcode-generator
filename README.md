# QR Code Generator Utility

This utility web application is built with Laravel, Livewire, and Tailwind CSS to generate QR codes for various types of information.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- **QR Code Generation**: Supports various types of QR codes including URL, email, phone, SMS, WiFi, geolocation, vCard, Bitcoin, PayPal, Ethereum, and custom types.
- **Customization**: Users can set QR code size, color, and overlay a logo.
- **Easy-to-Use Interface**: Simple interface for generating QR codes with intuitive options.
- **Responsive Design**: Built with Tailwind CSS to ensure responsiveness across devices.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/qr-code-generator.git
   ```
   
2. Install dependencies:

   ```bash
   composer install
   bun install && bun run dev
   ```
   
3. Set up environment variables:
   - Duplicate the .env.example file and rename it to .env.
   - Configure your database and other necessary environment variables.

   ```bash
   cp .env.example .env
   ```
   
4. Generate application key:

    ```bash
    php artisan key:generate
    ```
   
5. Start the development server, or use Laravel Herd

    ```bash
    php artisan serve
    ```

## Usage

- Access the application in your web browser at http://localhost:8000.
- Choose the type of information for which you want to generate a QR code (URL, email, phone, etc.).
- Customize the QR code settings like size, color, and logo overlay.
- Click on the generate button to create the QR code.
- Save or download the generated QR code for your use.

## Contributing

Contributions are welcome! Feel free to submit issues or pull requests. For major changes, please open an issue first to discuss what you would like to change.

- Fork the repository.
- Create your feature branch (`git checkout -b feature/YourFeature`).
- Commit your changes (`git commit -am 'Add some feature'`).
- Push to the branch (`git push origin feature/YourFeature`).
- Open a pull request.

## License

This project is licensed under the [MIT License](https://choosealicense.com/licenses/mit/).

