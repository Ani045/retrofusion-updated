# Site Structure — Current and Target

**Date:** 2 September 2026

---

## 1. Current inventory

289 page files backing 3 rentable villas.

| Group | Count | Notes |
|---|---|---|
| Core pages | 9 | home, about, contact, gallery, policies, privacy, terms, cancellation, thank-you |
| Property pages | 3 | retro-villas, neo-retro, retro-viswa-lonavala |
| Lonavala intent pages | 36 | occasion, group size, amenity and landmark pages — geographically honest |
| "Near city" matrix pages | 148 | machine-generated, near-duplicate, orphaned |
| Blog posts | 92 | genuine content, no schema on 87 |
| Handlers | 5 | mail1, lead-handler, whatsapp_handler and related — should never be indexed |

### The matrix

148 pages generated from:

- **4 product framings** — homestay, 4bhk villa, villa for 5 people, villa for 10 people
- **15 city targets** — Mumbai (51 pages), Pune (49), Navi Mumbai (7), Pune airport (5), Mumbai airport (5), Wakad, Thane, Panvel, Kharghar, Kalyan, Hinjewadi (4 each), Navi Mumbai airport, Kharadi, Baner (2 each), Dombivli (1)
- **14 amenity modifiers** — food (12), indoor games (9), caretaker (9), wifi (8), mountain view (8), jacuzzi (8), breakfast (8), bbq (8), private pool (6), power backup (6), chef (4), swimming pool (2), bonfire (1), barbeque (1)

All 3 villas share the same amenities, so no cell of this matrix corresponds to distinct inventory. `with-bbq` and `with-barbeque` are duplicate spellings of one modifier. `with-private-pool` and `with-swimming-pool` are the same feature.

### Structural faults

| Fault | Detail |
|---|---|
| Orphaned pages | Header and footer link to 9 URLs total. Sampled programmatic pages have zero inbound internal links |
| Redirect chains on every nav click | Nav links target `.php`, which 301s to the extensionless canonical |
| Sitemap drift | 49 content pages missing; maintained by hand |
| Missing canonicals | 13 pages, including the Retro Visawa property page |
| Blog isolation | Blog posts do not link to property or occasion pages |
| Two URL conventions | Root pages are extensionless, blog posts keep `.php` |

---

## 2. Target structure

Roughly 150 pages. The reduction comes almost entirely from the matrix.

```
/
├── /retro-villas                       Property — Retro Villa
├── /neo-retro                          Property — Neo-Retro
├── /retro-viswa-lonavala               Property — Retro Visawa
│
├── /stays                              NEW hub — all three, compared, with pricing
│   ├── /private-pool-villas-in-lonavala
│   ├── /luxury-4bhk-villas-in-lonavala
│   └── /pet-friendly-villas-in-lonavala
│
├── /occasions                          NEW hub
│   ├── /villas-in-lonavala-for-family
│   ├── /villas-in-lonavala-for-couples
│   ├── /honeymoon-villas-in-lonavala
│   ├── /anniversary-stay-in-lonavala
│   ├── /villas-in-lonavala-for-bachelor-party
│   ├── /villas-for-reunion-party-in-lonavala
│   ├── /villas-for-celebration-in-lonavala
│   └── /corporate-offsite-villas-in-lonavala
│
├── /groups                             NEW hub
│   ├── /villas-in-lonavala-for-5-people
│   ├── /villas-in-lonavala-for-10-people
│   ├── /villas-in-lonavala-for-15-people
│   └── /villas-in-lonavala-for-20-people
│
├── /getting-here                       NEW hub — replaces the 148-page matrix
│   ├── /from-mumbai
│   ├── /from-navi-mumbai
│   ├── /from-thane
│   ├── /from-pune
│   ├── /from-hinjewadi
│   ├── /from-kalyan
│   ├── /from-panvel
│   ├── /from-mumbai-airport
│   └── /from-pune-airport
│
├── /nearby                             Landmark pages — keep, rewrite
│   ├── /villas-near-bhushi-dam-lonavala
│   ├── /villas-near-lion-point
│   ├── /villas-near-tiger-point-lonavala
│   ├── /villas-near-malavli-lonavala
│   ├── /villas-near-lonavala-railway-station
│   └── /best-villas-near-pawna-lake-in-lonavala
│
├── /reviews                            NEW — genuine guest reviews
├── /about                              Add named hosts, photos, Person schema
├── /gallery
├── /contact
├── /blogs/                             92 posts, deduplicated to ~85
└── /policies, /privacy-policy, /terms-conditions, /cancellation-policy
```

---

## 3. Redirect map

The full page-by-page map should be generated from Search Console data before execution. The shape of it:

| From | To | Volume |
|---|---|---|
| `/{framing}-near-mumbai-with-{amenity}` | `/getting-here/from-mumbai` | ~40 |
| `/{framing}-near-pune-with-{amenity}` | `/getting-here/from-pune` | ~38 |
| `/{framing}-near-{suburb}` where suburb has no route page | nearest origin route page | ~25 |
| `/pet-friendly-*-near-*` | `/stays/pet-friendly-villas-in-lonavala` | 9 |
| `/villa-for-{n}-people-near-{city}` | `/groups/villas-in-lonavala-for-{n}-people` | ~30 |
| `/4bhk-villa-near-*` with no amenity | `/stays/luxury-4bhk-villas-in-lonavala` | ~12 |

Rules for execution:

- 301 only. Never 404 a page that has any impressions.
- One hop. Do not redirect into a URL that itself redirects.
- Batches of 30 to 40, two to three weeks apart, so the effect is attributable.
- Remove each batch from the sitemap in the same deploy.
- Keep the redirects permanently. Do not clean them up later.

---

## 4. Internal linking

The current model is a hub with nine spokes and 280 orphans. The target:

**Global navigation** — home, the three properties, stays, occasions, groups, blog, about, contact. Pointing at canonical extensionless URLs, with no redirect hop.

**Hub to spoke** — each hub page links to every page beneath it. Each spoke links back to its hub.

**Cross-links** — occasion pages link to the group-size page matching their typical party. Group pages link to the properties that fit. Landmark pages link to the getting-here route that passes them.

**Blog to money pages** — this is the biggest single gain available. Every one of the 92 posts should carry two to three contextual links to the relevant property, occasion or landmark page. A post on Bhushi Dam links to the Bhushi Dam villa page. A post on bachelor party stays links to the bachelor party page. Currently none of them do.

**Property to blog** — each property page links to three or four posts about what is nearby, which gives the blog a reason to exist in the crawl graph.

---

## 5. Sitemap

Replace the hand-maintained file with generation from the filesystem at deploy time.

- Include: all indexable content pages, both root and `/blogs/`
- Exclude: `mail1`, `lead-handler`, `whatsapp_handler`, `thank-you`, `blogs/index.php` if it duplicates `/blogs`
- `lastmod` from the file modification time, not a hardcoded date. Every entry currently reads `2026-04-09`
- Drop `priority` and `changefreq`. Google ignores both
- Remove redirected URLs in the same deploy as the redirect

---

## 6. Schema by page type

| Page type | Schema |
|---|---|
| Home | `LodgingBusiness` with complete `geo`, `address`, `priceRange`, `amenityFeature`, `openingHours` |
| Property | `LodgingBusiness` or `VacationRental`, `Accommodation`, `ImageObject`, `offers` with real price |
| Stays / occasions / groups | `ItemList` of the properties, `BreadcrumbList` |
| Getting here | `WebPage`, `BreadcrumbList`, `FAQPage` only where questions are visible on the page |
| Reviews | Individual `Review` items with real author and date. No self-assigned `AggregateRating` |
| Blog | `BlogPosting` with `author` as `Person`, `datePublished`, `dateModified`, `image` |
| Contact | `ContactPage`, `LocalBusiness` |

Every `LodgingBusiness` needs `GeoCoordinates`. 171 of 183 currently lack it. The address should be the full street address, not the string "Lonavala".
