// Products Database
const products = [
    {
        id: 1,
        name: "Modern Ceramic Vase",
        price: 89,
        category: "Decorative Accessories",
        room: "Living Room",
        image: "https://images.unsplash.com/photo-1691678916234-34bb2512c7de?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjZXJhbWljJTIwdmFzZSUyMGRlY29yfGVufDF8fHx8MTc3MDU2MzQwN3ww&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Elegant handcrafted ceramic vase with a smooth matte finish. Perfect for fresh flowers or as a standalone decorative piece.",
        materials: "Premium ceramic with matte glaze",
        dimensions: "Height: 12 inches, Diameter: 6 inches",
        care: "Wipe clean with a soft, damp cloth. Not dishwasher safe."
    },
    {
        id: 2,
        name: "Velvet Throw Pillows Set",
        price: 129,
        category: "Living Room Decor",
        room: "Living Room",
        image: "https://images.unsplash.com/photo-1749705313582-fd2f1a014f53?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjB0aHJvdyUyMHBpbGxvd3N8ZW58MXx8fHwxNzcwNTg0NjQ5fDA&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Luxurious set of 2 velvet throw pillows in neutral tones. Adds comfort and sophistication to any sofa or bed.",
        materials: "100% velvet cover with premium down-alternative filling",
        dimensions: "18 x 18 inches each",
        care: "Spot clean or dry clean only. Remove covers for washing if detachable."
    },
    {
        id: 3,
        name: "Contemporary Table Lamp",
        price: 149,
        category: "Lighting & Lamps",
        room: "Bedroom",
        image: "https://images.unsplash.com/photo-1676318813569-569623e88339?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0YWJsZSUyMGxhbXAlMjBtb2Rlcm58ZW58MXx8fHwxNzcwNTg0NjQ5fDA&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Modern table lamp with a sleek design and warm ambient lighting. Ideal for bedside tables or living room accent lighting.",
        materials: "Metal base with fabric shade",
        dimensions: "Height: 20 inches, Base diameter: 6 inches",
        care: "Dust regularly with a soft cloth. Use LED or CFL bulbs (not included)."
    },
    {
        id: 4,
        name: "Arched Wall Mirror",
        price: 199,
        category: "Wall Art & Mirrors",
        room: "Bedroom",
        image: "https://images.unsplash.com/photo-1701421052815-a66c64693978?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3YWxsJTIwbWlycm9yJTIwaW50ZXJpb3J8ZW58MXx8fHwxNzcwNTg0NjQ5fDA&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Stunning arched mirror with a gold-finished frame. Opens up any space and adds a touch of elegance.",
        materials: "High-quality glass with metal frame",
        dimensions: "24 x 36 inches",
        care: "Clean with glass cleaner and a soft cloth."
    },
    {
        id: 5,
        name: "Minimalist Wall Art Print",
        price: 79,
        category: "Wall Art & Mirrors",
        room: "Living Room",
        image: "https://images.unsplash.com/photo-1612845123529-76a9edc5388a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3YWxsJTIwYXJ0JTIwZ2FsbGVyeXxlbnwxfHx8fDE3NzA1ODQ2NDZ8MA&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Abstract minimalist art print on premium paper. Brings modern sophistication to any room.",
        materials: "Archival quality paper with wooden frame",
        dimensions: "16 x 20 inches (framed)",
        care: "Keep away from direct sunlight. Dust frame gently."
    },
    {
        id: 6,
        name: "Modern Pendant Light",
        price: 249,
        category: "Lighting & Lamps",
        room: "Dining Room",
        image: "https://images.unsplash.com/photo-1758945630632-7a8f1caffc6d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBwZW5kYW50JTIwbGlnaHRpbmd8ZW58MXx8fHwxNzcwNTg0NjQ3fDA&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Elegant pendant light fixture that creates a focal point in any dining or living space.",
        materials: "Glass and brushed metal",
        dimensions: "Diameter: 12 inches, Drop length: 24 inches",
        care: "Dust regularly. Professional installation recommended."
    },
    {
        id: 7,
        name: "Decorative Tray Set",
        price: 69,
        category: "Decorative Accessories",
        room: "Living Room",
        image: "https://images.unsplash.com/photo-1722356541579-c5c6b0a42789?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxkZWNvcmF0aXZlJTIwaG9tZSUyMGFjY2Vzc29yaWVzfGVufDF8fHx8MTc3MDU4NDY0N3ww&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Set of 2 decorative trays in natural tones. Perfect for organizing and styling coffee tables or ottomans.",
        materials: "Wood and ceramic",
        dimensions: "Large: 14 x 10 inches, Small: 10 x 7 inches",
        care: "Wipe clean with a damp cloth. Not suitable for hot items."
    },
    {
        id: 8,
        name: "Luxury Bedding Set",
        price: 299,
        category: "Bedroom Decor",
        room: "Bedroom",
        image: "https://images.unsplash.com/photo-1767050371633-675072d4bed7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxlbGVnYW50JTIwYmVkcm9vbSUyMGludGVyaW9yJTIwd2hpdGV8ZW58MXx8fHwxNzcwNTg0NjQ1fDA&ixlib=rb-4.1.0&q=80&w=1080",
        description: "Premium quality bedding set including duvet cover, pillowcases, and fitted sheet in elegant neutral tones.",
        materials: "100% Egyptian cotton with 400 thread count",
        dimensions: "Queen size (includes 1 duvet cover, 2 pillowcases, 1 fitted sheet)",
        care: "Machine washable in cold water. Tumble dry low."
    }
];
