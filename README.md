# Soap Supply System

## Overview
The Soap Supply System is a web application designed to facilitate the management of soap orders between customers and managers. The system allows customers to place orders, while managers can manage product listings and confirm orders.

## Features
- **User Authentication**: Secure login and registration for both customers and managers.
- **Product Management**: Managers can add, update, and delete products from the inventory.
- **Order Management**: Customers can request orders, and managers can confirm them.
- **Order Status**: The system provides real-time updates on product availability and order status.
- **Notifications**: Users receive notifications for successful and failed orders.
- **Payment Processing**: The system generates receipts automatically after payment.

## Project Structure
```
soap-supply-system
├── src
│   ├── server.ts
│   ├── controllers
│   │   ├── authController.ts
│   │   ├── productController.ts
│   │   └── orderController.ts
│   ├── services
│   │   ├── authService.ts
│   │   ├── productService.ts
│   │   └── orderService.ts
│   ├── models
│   │   ├── userModel.ts
│   │   ├── productModel.ts
│   │   └── orderModel.ts
│   ├── routes
│   │   └── index.ts
│   ├── middleware
│   │   └── authMiddleware.ts
│   ├── db
│   │   └── index.ts
│   └── types
│       └── index.ts
├── db
│   ├── migrations
│   │   └── 001_create_tables.sql
│   ├── seeds
│   │   └── seed_products.sql
│   └── schema.sql
├── tests
│   ├── auth.test.ts
│   ├── product.test.ts
│   └── order.test.ts
├── package.json
├── tsconfig.json
├── .env.example
└── README.md
```

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd soap-supply-system
   ```
3. Install dependencies:
   ```
   npm install
   ```
4. Set up the environment variables by copying `.env.example` to `.env` and updating the values as needed.

## Usage
To start the application, run:
```
npm start
```

## Testing
To run the tests, use:
```
npm test
```

## Contributing
Contributions are welcome! Please open an issue or submit a pull request for any enhancements or bug fixes.

## License
This project is licensed under the MIT License.