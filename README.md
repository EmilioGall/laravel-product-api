Here is the README.md file for the "laravel-product-api" project:

# Laravel Product API

A Laravel-based API that manages products and categories. This project provides a simple RESTful API to handle CRUD operations for products, with support for categories and product filtering.

## Table of Contents

- [Dependencies](#dependencies)
- [Features](#features)
- [Installation](#installation)
- [Milestones](#milestones)
- [Contributing](#contributing)

## Dependencies

This project utilizes the following technologies:

- **Laravel**: The PHP framework for building web applications.
- **Faker**: A library for generating fake data for products.
- **MySQL**: The database used to store products and categories.

## Features

1. **Product Management**:
   - Supports full CRUD functionality for products.

2. **Category Support**:
   - Each product is associated with a category.

3. **Product Filtering**:
   - Allows filtering products by category and highlights featured products.

4. **Seeder for Products**:
   - Generates at least 100 fake products using Faker for testing.

5. **API Endpoints**:
   - **GET /api/products**: Retrieve all products.
   - **GET /api/products/{id}**: Retrieve details of a specific product.
   - **POST /api/products**: Create a new product.
   - **PUT /api/products/{id}**: Update an existing product.
   - **DELETE /api/products/{id}**: Delete a product.

## Installation

To set up the project locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/EmilioGall/laravel-product-api.git
   cd laravel-product-api
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up your `.env` file and configure the database connection:
   ```bash
   cp .env.example .env
   ```

4. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed
   ```

5. Start the Laravel development server:
   ```bash
   php artisan serve
   ```

6. Access the API at:
   ```
   http://localhost:8000/api/products
   ```

## Milestones

1. **Scaffold Project**:
   - Initialize the Laravel project and set up basic file structure.

2. **Database Migration**:
   - Create migrations for products and categories, ensuring a relationship between them.

3. **Models and Seeder**:
   - Implement models for Product and Category with appropriate relationships.
   - Use Faker to generate at least 100 fake products.

4. **API CRUD**:
   - Implement controllers to handle CRUD operations for products.

5. **Product Filtering**:
   - Add functionality to filter products by category and a "featured" attribute.

6. **Testing**:
   - Test the API to ensure all functionality works as expected.

7. **Deployment**:
   - Deploy the project to a hosting platform such as Heroku or a similar service.

## Contributing

Contributions are welcome! Follow these steps:

1. Fork the repository.
2. Create a new feature branch:
   ```bash
   git checkout -b feature/your-feature
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add new feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/your-feature
   ```
5. Open a pull request.

For more details, visit the [GitHub repository](https://github.com/EmilioGall/laravel-product-api).

---

Happy coding!
