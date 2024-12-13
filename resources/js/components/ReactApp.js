import { QRCodeSVG } from "qrcode.react";

function ReactApp() {
  const fullName = "Doe John";
  const firstName = "John";
  const lastName = "Doe";
  const phoneNumber = "0566057605";
  const workNumber = "0566057605";
  const companyName = "AMS";
  const emailAdd = "pdeinla@gmail.com";
  const VCARD_DETAILS = `BEGIN:VCARD
VERSION:3.0
FN;CHARSET=UTF-8:${fullName}
N;CHARSET=UTF-8:${lastName};${firstName};
EMAIL;CHARSET=UTF-8:${emailAdd}
TEL;TYPE=CELL,VOICE:${phoneNumber}
TEL;TYPE=WORK,VOICE:${workNumber}
ORG;CHARSET=UTF-8:${companyName}
END:VCARD`;

  return (
    <QRCodeSVG
      value={VCARD_DETAILS}
      size={150}
      imageSettings={{
        src: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAD5ElEQVRYheWWXWwUZRSGn/lmZ+t2yypdxBqH0oqoiT/IjQZCJXZTtYnFKqktCalVL6DcIBLFYMXUSIGANyYS/+qqgaVtBI2iMdFtQ2piNP40lAtShBBTGyhld2nDttvdmc+L0p/dmW1nabzRN9mLOec7532/c87OHPi/Q8k01AYOfqoKbeNMm2GmDrSHG3dMPsfq0D0qmzov8EZlGHM+AoSNJnHNnvkD4Eod+gIXYbegqbyI4O9P2OWYlwCZ9fDIBvQFGieEwp0AbkH9/TfxYd9T1y/CrgK2lsEadI9KlwK3z/SpCs+X5NPa/fj1iXBUgdtcA7o/jy5V4Q67JJqg4SE/rb3rchcxZ0ChGuNl//t1Igv5TBF3+2jteiw3EbO2wK9Gea3wALeog46SuRQaVi8i+GMO7cjaAr8aoalwP0XqRcuJlKRn3GQ9EM/0uQX1D/pp/anSmQjbCkzc/G0Wq5csXkPSMzRGRd5hjg0nqTKlVYQmaFi5kODRtXOLsBwocf1FU+F+27Ibkl+jCR659XOGAG5sozNuUCVtKpGnUr9uCcGLNbOLSPvPXa5F92mi26WYJZkHTUlPZJzAzR1EMn1XN1DucfG1Avk2oj/rjfHcyuP2b8wpAVdqKS7QCNtNe1KqPSNJI+Bvt5JPYriOcq9bfCOkeYMl3uTQmRGevecrqwgBEJkgP2FHfj65lG2DzT/MRg7ga6NzT9Xh/oRmKQKaYONdPoKnn7a2Q1yqodg3cfMSO/K90W0MGf7ZuKfwW+mjYu+TbdiJUBXqSz0EwxXpIkSBxmpVSX+9ApxNlrI7sp0R0+uIHACJeXLJw7RUd5DQrHEuhfIVCylKE+AJ0TZq0AjT/TmfXMq+6IvEpcc5+Qyc0tewpzq9EhIGxgwqFnUwkCYAID/EB2MGmwDzbLKUluhLXDWng62fpyxQpsvbq5fRUt1OQvMioT+eYq33CKczQ6YCPCE+GjVYv+/y5uMzya+pdwaZPuWn9DI+XrXrnVGDQMER/rQLSRuI/BBfDpu+mFM+CxTrlH+/4oVub4i+bCE5LSRzQua+ns1rnXKCua7jaCNyDJsWZGZbtgyWF08/u6xZsmuO3VvZ4BXq1mz+gdd36oYrPeW4gvgCePNV2LGFXapgK5BKpmj2lHDQRoD9TgigoiwWKA9kE6D/PWCxJdSJ6Fc284zmonnSnufm3fg5TjoaQpnV4xxCUJZpc7tZ868P4SQk/JFpS6XoyWkI5zGe9J3hk2SK9ySkpGQ8Mc5bW3bynWUGpDR2m1K0Kum2fgAJ3wIXciFWpPwF4L4AJtB47me2Gybm8lWMzeM+/yH8A3H5Op2hB+sjAAAAAElFTkSuQmCC",
        width: 48,
        height: 48,
      }}
    />
  );
}

export default ReactApp;
