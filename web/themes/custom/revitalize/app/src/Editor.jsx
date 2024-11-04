import { Puck } from "@measured/puck";
import "@measured/puck/puck.css";
import "./index.css";

// Create Puck component config
const config = {
  components: {
    HeadingBlock: {
      fields: {
        children: {
          type: "text",
        },
      },
      defaultProps: { children: "Heading" },
      render: ({ children }) => {
        return <h1 className="text-5xl m-10 font-bold">{children}</h1>;
      },
    },
  },
};

// Describe the initial data
const initialData = {};

// Save the data to your database
// const save = (data) => {};
const save = () => {};

// Render Puck editor
export function Editor() {
  return <Puck config={config} data={initialData} onPublish={save} />;
}
